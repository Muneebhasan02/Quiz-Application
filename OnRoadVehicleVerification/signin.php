<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "vehicle_mgmt_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database_name);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Checking Existing Email
    $sql = "SELECT username, email, password FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        header("Location: index.php?error=No Account Found!");
        exit();
    }

    $row = mysqli_fetch_assoc($result);

    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['isLoggedIn'] = true;

    echo "Username: " . $_SESSION['username'] . "<br>";
    echo "Email: " . $_SESSION['email'] . "<br>";
    echo "Logged in: " . $_SESSION['isLoggedIn'] . "<br>";
     header('location: home.php');
}
?>
