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
    $sql = "SELECT owner.name, owner.father_name, registration.make, registration.model, registration.varient FROM registration INNER JOIN owner ON registration.cnic = owner.cnic where registration.Regno = '$reg';";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        header("Location: index.php?error=No Account Found!");
        exit();
    }

    $row = mysqli_fetch_assoc($result);

    $_SESSION['owner'] = $row['name'];
    $_SESSION['father'] = $row['father_name'];
    $_SESSION['make'] = $row['make'];
    $_SESSION['model'] = $row['model'];
    $_SESSION['varient'] = $row['varient'];
   
    $_SESSION['isLoggedIn'] = true;

    // echo "CNIC: " . $_SESSION['cnic'] . "<br>";

    // echo "Logged in: " . $_SESSION['isLoggedIn'] . "<br>";

    // PHP code...
    header('location: v.php');

    
    // More PHP code...
 
    
    
}
?>
