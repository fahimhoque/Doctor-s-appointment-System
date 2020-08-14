<?php 
session_start();
$patient_id    = $_SESSION['id'];
$patient_lname = $_SESSION['l_name'];
$patient_fname = $_SESSION['f_name'];


?>


<!DOCTYPE html>
<html>
<head>
    <title>Patient Dashboard</title>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="views/patient/scripts/patient-ticket.js"></script>
    <script src="views/patient/scripts/patient-find-blood.js"></script>
    <!--Custom JS-->


    <!--CSS Link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="views/patient/style/patient-dashboard.css">
    <link rel="stylesheet" type="text/css" href="views/patient/style/patient-dashboard-ticket.css">
    <link rel="stylesheet" type="text/css" href="views/patient/style/patient-dashboard-find-blood.css">
    <link rel="stylesheet" type="text/css" href="views/patient/style/patient-dashboard-find-doctor.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>
<body>
    <!--NAVBAR-->
    <div class="wrapper">
        <div class="sidebar">
            <h2>Patient</h2>
            <ul>
                <!--Dashboard which will be active on Login-->
                <li><a href="patient-dashboard"   id="patient-dashboard"><i class="fas fa-th"></i>Dashboard</a></li>

                <!--Load Ticket's Data on Click-->
                <li><a href="javascript:void(0);" id="load-patient-profile"><i class="fas fa-user"></i>Profile</a></li>                

                <!--Load Patient Data On Click-->
                <li><a href="find-blood" target="_blank"><i class="fas fa-tint"></i>Find Blood</a></li>

                <!--Load Ticket's Data on Click-->
                <li><a href="views/patient/patient-support.php" id="patient-ticket"><i class="fas fa-tags"></i>Ticket</a></li>

                <!--Logout--> 
                <li><a href="patient-logout"><i class="fas fa-power-off"></i>LogOut</button></a></li>
            </ul>
        </div>
    </div>

    
<script>
    $("#ticket").hide();
    $("#find-blood").hide();
    $("#show-blood-donor").hide();



</script>
    

   
</body>
</html>