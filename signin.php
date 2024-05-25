<?php
session_start();
$servername = "localhost";
$dbusername = "root"; // Change this to your database username
$dbpassword = ""; // Change this to your database password
$dbname = "unramgradcg";

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


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
    <link rel="stylesheet" href="css/signin_styles.css" />
  </head>
  <body>
    <main>
      <form action="signin.php" method="post">
        <h1>Sign In</h1>
        <img src="images/logoUnram.png" alt="logoUnram" class="logoUnram" />
        <div class="form-container">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required />
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required />
          <button type="submit">Sign In</button>
          <p>Belum punya akun? <a href="signup.php">Daftar</a></p>
          <!-- Tambahkan teks dan link untuk Sign Up -->
        </div>
      </form>
    </main>
  </body>
</html>
