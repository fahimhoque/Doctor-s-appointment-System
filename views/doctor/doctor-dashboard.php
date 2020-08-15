<?php 
session_start();
$doctor_id    = $_SESSION['id'];
$doctor_lname = $_SESSION['l_name'];
$doctor_fname = $_SESSION['f_name'];


?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard: Doctor</title>
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script> 
    <!--Custom JS-->
    <script src="views/doctor/scripts/doctor_dashboard.js"></script> 
    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="views/doctor/style/doctor_dashboard.css">
</head>

<body>
    <h4><?php echo "Name#ID: ". $doctor_fname." ".$doctor_lname." # ".$doctor_id; ?></h4>
    <a href="views/doctor/support.php">Support Ticket</a>

</body>

</html>