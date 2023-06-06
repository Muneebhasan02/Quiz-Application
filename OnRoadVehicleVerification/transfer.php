<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'vehicle_mgmt_db');

// initialize variables
   
    $id = 0;
    $update = false;

if (isset($_POST['submit'])) {
    $owner = $_POST['owner'];
    $father = $_POST['father'];
    $cnic = $_POST['cnic'];
    $new_owner = $_POST['new_owner'];
    $new_father = $_POST['new_father'];
    $new_cnic = $_POST['new_cnic'];
    $transfer_date = $_POST['transfer_date'];
    $regno = $_POST['regno'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $varient = $_POST['varient'];
    mysqli_query($db, "INSERT INTO `transfer_application` (`owner`, `father_name`, `cnic`, `new_owner`, `new_father`, `new_cnic`, `transfer_date`, `regno`, `make`, `model`, `varient`) VALUES ('$owner', '$father', '$cnic', '$new_owner', '$new_father', $new_cnic, '$transfer_date', $regno, '$make', $model, '$varient');"); 
    $_SESSION['message'] = "Information saved, you may now visit excise office within 2 - 3 days for confirmation. Thank you for your patience."; 
    // echo  $_SESSION['message'];
    header('location: tc.php');
}
?>


