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
    <script src="views/patient/scripts/patient_profile.js"></script>
    <!--Custom JS-->


    <!--CSS Link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="views/patient/style/patient-dashboard.css">
    <link rel="stylesheet" type="text/css" href="views/patient/style/patient-dashboard-ticket.css">
    <link rel="stylesheet" type="text/css" href="views/patient/style/patient-dashboard-find-blood.css">
    <link rel="stylesheet" type="text/css" href="views/patient/style/patient-dashboard-find-doctor.css">
    <link rel="stylesheet" type="text/css" href="views/patient/style/patient_profile.css">

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

    <div class="container" id="profile">
        <div class="form-wrap">
            
                <h1 style="margin-left: 3px;">Update your profile</h1>
                <p><?php echo $patient_fname." ".$patient_lname." "." # ".$patient_id?></p>
            
            <div class="form-group">
                <label for="title">Title</label>
                <select name="title" id="title">
                    <option value="mr">Mr.</option>
                    <option value="mrs">Mrs.</option>
                    <option value="miss">Miss</option>
                    <option value="Rather not say">Rather not say</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" name="first-name" id="f_name" placeholder="Enter First Name">
            </div>
            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" name="last-name" id="l_name" placeholder="Enter Last Name">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="contact" placeholder="(000-0000-00)">
            </div>
            <div class="form-group">
                <label for="phone">Emergency Contact</label>
                <input type="text" name="phone" id="emergency_contact" placeholder="(000-0000-00)">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Enter Your Email">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" id="age" placeholder="Enter Your Age">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                    <option value="Rather not say">Rather not say</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="password">Current Password</label>
                <input type="password" name="password" id="password" placeholder="Current Password">
            </div>
            <div class="form-group">
                <label for="password-confirm">New Password</label>
                <input type="password" name="password-confirm" id="password-confirm" placeholder="New Password">
            </div>
            <br>
            <button style="margin-left: 8px;">Update Profile</button>
        </div>
    </div>

    
<script>
    $("#ticket").hide();
    $("#find-blood").hide();
    $("#show-blood-donor").hide();
    $("#profile").hide();



</script>
    

   
</body>
</html>