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
    $reg = $_POST['reg'];

    // Checking Existing Email
    $sql = "SELECT token.valid_till, owner.name, registration.Regno, token.amount, token.payment_method FROM token INNER JOIN registration ON token.regno = registration.Regno INNER JOIN owner ON registration.cnic = owner.cnic where registration.Regno='$reg';";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        header("Location: index.php?error=No Account Found!");
        exit();
    }

    $row = mysqli_fetch_assoc($result);

    $_SESSION['valid'] = $row['valid_till'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['Regno'] = $row['Regno'];
    $_SESSION['amount'] = $row['amount'];
    $_SESSION['payment'] = $row['payment_method'];
   
    $_SESSION['isLoggedIn'] = true;

    // echo "CNIC: " . $_SESSION['cnic'] . "<br>";

    // echo "Logged in: " . $_SESSION['isLoggedIn'] . "<br>";

    // PHP code...
    header('location: tv.php');

    
    // More PHP code...
 
    
    
}
?>
