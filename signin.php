<?php
session_start();
$servername = "localhost";
$dbusername = "root"; // Change this to your database username
$dbpassword = ""; // Change this to your database password
$dbname = "alumni_dashboard";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($stored_password);
    $stmt->fetch();

    if ($stored_password && password_verify($password, $stored_password)) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit(); // Keluar dari skrip setelah mengalihkan pengguna
    } else {
        echo "Invalid username or password";
    }    

    $stmt->close();
}

$conn->close();
?>
