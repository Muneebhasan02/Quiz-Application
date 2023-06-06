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
    $sql = "select challan.amount, challan.reason, challan.due_date, owner.name, registration.Regno from challan INNER join registration on challan.regno = registration.Regno inner join owner on registration.cnic = owner.cnic where registration.Regno = '$reg'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        $_SESSION['result'] = false; // Set $_SESSION['result'] to false when no results are found
        header('location: vc.php');
    } else {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['amount'] = $row['amount'];
        $_SESSION['reason'] = $row['reason'];
        $_SESSION['date'] = $row['due_date'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['regno'] = $row['Regno'];

        $_SESSION['isLoggedIn'] = true;

        $_SESSION['result'] = true;
        header('location: vc.php');
    }
}
?>
