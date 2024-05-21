<?php
session_start();
$servername = "localhost";
$dbusername = "root"; // Ganti ini dengan username basis data Anda
$dbpassword = ""; // Ganti ini dengan password basis data Anda
$dbname = "alumni_dashboard";

// Membuat koneksi
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Memeriksa apakah password dan konfirmasi password cocok
    if ($password !== $confirm_password) {
        echo "Error: Passwords do not match. Please try again.";
        exit();
    }

    // Melakukan hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Memeriksa apakah username sudah ada di basis data
    $sql_check_username = "SELECT id FROM users WHERE username = ?";
    $stmt_check_username = $conn->prepare($sql_check_username);
    $stmt_check_username->bind_param("s", $username);
    $stmt_check_username->execute();
    $stmt_check_username->store_result();

    if ($stmt_check_username->num_rows > 0) {
        // Username sudah ada
        echo "Error: Username already exists. Please choose a different username.";
    } else {
        // Username belum ada, melanjutkan dengan memeriksa email
        $stmt_check_username->close();

        // Memeriksa apakah email sudah ada di basis data 
        $sql_check_email = "SELECT id FROM users WHERE email = ?";
        $stmt_check_email = $conn->prepare($sql_check_email);
        $stmt_check_email->bind_param("s", $email);
        $stmt_check_email->execute();
        $stmt_check_email->store_result();

        if ($stmt_check_email->num_rows > 0) {
            // Email sudah ada
            echo "Error: Email already exists. Please choose a different email.";
        } else {
            // Email belum ada, lanjutkan dengan insert
            $stmt_check_email->close();

            $sql_insert = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
            $stmt_insert = $conn->prepare($sql_insert);
            $stmt_insert->bind_param("sss", $username, $email, $hashed_password);

            if ($stmt_insert->execute()) {
                $_SESSION['username'] = $username;
                header("Location: dashboard.php");
                exit(); // Keluar dari skrip setelah mengalihkan pengguna
            } else {
                echo "Error: " . $stmt_insert->error;
            }            

            $stmt_insert->close();
        }
    }
}

$conn->close();
?>
