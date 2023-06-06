
<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'vehicle_mgmt_db');

// initialize variables
   
    $id = 0;
    $update = false;

if (isset($_POST['register'])) {
    $reg = $_POST['reg'];
    $owner = $_POST['owner'];
    $father = $_POST['father'];
    $cnic = $_POST['cnic'];
    $chases = $_POST['chases'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $varient = $_POST['varient'];
    mysqli_query($db, "insert into registration_form VALUES ('$owner', '$father', '$cnic', $chases, '$make', '$model', '$varient', '$reg')"); 
    $_SESSION['message'] = "Information saved"; 
    echo  $_SESSION['message'];
    header('location: vr.php');
}
?>


