<!--
<?php
//session_start();
//if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    
//} else {
    //echo "You need to login first to view the dashboard";
    //header('Location: patient-login');
//}
?>-->


<!DOCTYPE html>
<html>
<head>
    <title>Patient Dashboard</title>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Custom JS-->


    <!--Custom CSS Link-->
    <link rel="stylesheet" type="text/css" href="views/patient/style/patient-dashboard.css">


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
                
                <li><a href="patient-dashboard"><i class="fas fa-th"></i>Dashboard</a></li>

                <!--Load Ticket's Data on Click-->
                <li><a href="" id="tickets-details-load-link"><i class="fas fa-tags"></i>File Ticket</a></li>                

                <!--Load Patient Data On Click-->
                <li><a href="" id="load-patient-data"><i class="fas fa-tint"></i>Find Blood</a></li>

                <!--Load Ticket's Data on Click-->
                <li><a href="" id="tickets-details-load-link"><i class="fas fa-user"></i>Profile</a></li>

                <!--Logout--> 
                <li><a href="patient-logout"><i class="fas fa-cog"></i>LogOut</button></a></li>
            </ul>
        </div>
    </div>

   
</body>
</html>