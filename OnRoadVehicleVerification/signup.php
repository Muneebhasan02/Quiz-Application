
<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'vehicle_mgmt_db');

// initialize variables
$username = "";
$email = "";
$password = "";
$id = 0;
$update = false;

if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    mysqli_query($db, "INSERT INTO users (username, email, password) VALUES ('$username','$email', '$password')"); 
    $_SESSION['message'] = "Address saved"; 
    header('location: index.php');
}
?>
