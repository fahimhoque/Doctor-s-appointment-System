<?php
session_start();
require('views/config.php');
$doctor_id = $_SESSION['id'];


$today = date("Y-m-d");

$sql = "SELECT * FROM doctor";
$result = mysqli_query($conn, $sql);
$count_doctor = mysqli_num_rows($result);


//appointments today
$sql_appointments_today = "SELECT * FROM appointment WHERE doctor_id = '$doctor_id' AND appointment_date = '$today'";
$appointments_today     = mysqli_query($conn, $sql_appointments_today);
$count_appointments_today = mysqli_num_rows($appointments_today);


//appointments
$sql_appointments = "SELECT * FROM appointment WHERE doctor_id = '$doctor_id'";
$appointments = mysqli_query($conn, $sql_appointments);
$count_appointments = mysqli_num_rows($appointments);


//show doctor tickets
$sql_doctor_tickets = "SELECT * FROM doctor_tickets WHERE doctor_id = '$doctor_id'";
$result_doctor_tickets = mysqli_query($conn, $sql_doctor_tickets);
$count_doctor_tickets = mysqli_num_rows($result_doctor_tickets);



?>