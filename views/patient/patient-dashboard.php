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
    <script src="views/patient/scripts/patient-ticket.js"></script>
    <script src="views/patient/scripts/patient-find-blood.js"></script>
    <!--Custom JS-->


    <!--Custom CSS Link-->
    <link rel="stylesheet" type="text/css" href="views/patient/style/patient-dashboard.css">
    <link rel="stylesheet" type="text/css" href="views/patient/style/patient-dashboard-ticket.css">
    <link rel="stylesheet" type="text/css" href="views/patient/style/patient-dashboard-find-blood.css">

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
                
                <li><a href="patient-dashboard"><i class="fas fa-th"></i>Dashboard</a></li>

                <!--Load Ticket's Data on Click-->
                
                <li><a href="javascript:void(0);" id="load-patient-profile"><i class="fas fa-user"></i>Profile</a></li>                

                <!--Load Patient Data On Click-->
                <li><a href="javascript:void(0)" id="patient-find-blood"><i class="fas fa-tint"></i>Find Blood</a></li>

                <!--Load Ticket's Data on Click-->
                <li><a href="javascript:void(0);" id="patient-ticket"><i class="fas fa-tags"></i>Ticket</a></li>

                <!--Logout--> 
                <li><a href="patient-logout"><i class="fas fa-power-off"></i>LogOut</button></a></li>
            </ul>
        </div>

        <!--Start Find Blood-->
            <div id="find-blood">
                <form>
                    <label for="city">City:</label>
                    <input type="text" name="find-city">
                    <label for="blood-type">Blood Type:</label>
                    <select id="blood-type" name="blood-type">
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                    </select>
                    <input type="submit" name="submit_find_blood">
                </form>
            </div>
        <!--End Find Blood-->



        <!--Start of Ticket-->
        <div id="ticket">
            <form action="">
                <label for="subject">Subject</label>
                <input type="text" id="ticket_subject" name="ticket_subject">

                <label for="subject">Message</label>
                <textarea id="ticket_message" name="ticket_body" style="height:450px"></textarea>

                <input type="submit" name="btn_submit_ticket" value="Submit">
            </form>
        </div>
        <!--End of Ticket-->


    </div>


<script>
    $("#ticket").hide();
    $("#find-blood").hide();



</script>
    

   
</body>
</html>