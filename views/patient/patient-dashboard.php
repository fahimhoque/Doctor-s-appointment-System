<?php

require('config.php');
if (isset($_POST['submit_find_blood'])){

    $city = $_POST['city'];
    $bloodtype = $_POST['blood-type'];

    $sql_blood_donor = "SELECT * FROM blood_donor WHERE city='$city' and bloodtype='$bloodtype' ";
    $result_blood_donor = mysqli_query($conn, $sql_blood_donor) or die(mysqli_error($conn));

    //$count = mysqli_num_rows($result);
    $count_blood_donor = mysqli_num_rows($result_blood_donor);

}
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
                <li><a href="javascript:void(0)"  id="patient-find-blood"><i class="fas fa-tint"></i>Find Blood</a></li>

                <!--Load Ticket's Data on Click-->
                <li><a href="javascript:void(0);" id="patient-ticket"><i class="fas fa-tags"></i>Ticket</a></li>

                <!--Logout--> 
                <li><a href="patient-logout"><i class="fas fa-power-off"></i>LogOut</button></a></li>
            </ul>
        </div>
    </div>

    <!--Start Dash-->
    <div id="find-doctor">
        <form action="" method="POST" >
            <label for="city">City:</label>
            <input type="text" name="find-doctor-city">
            <label for="doctor-type">Doctor Type:</label>
            <select class="doctor-type" id="find-doctor-type" name="find-doctor-type">
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>
                <option>AB+</option>
                <option>AB-</option>
            </select>
            <button id="submit_find_blood">Find </button>
        </form>
    </div>

    <!-- End Dash -->

    <!-- Start Profile -->
    <div id="patient-profile">
            
    </div>
    <!-- End   Profile -->


    <!--Start Find Blood-->
    <div id="find-blood">
        <form action="" method="POST" onsubmit="return false">
            <label for="city">City:</label>
            <input type="text" name="city">
            <label for="blood-type">Blood Type:</label>
            <select class="blood-type" id="blood-type" name="blood-type">
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>
                <option>AB+</option>
                <option>AB-</option>
            </select>
            <button id="btn_find_blood"> Find</button>
        </form>

        <div id="show-blood-donor">
            <br>
            <h3>Blood Donor Details</h3>
            <br>
            <table class="table table-stripped table-bordered text-center" id="blood-donor-details">
                <thead>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>City</th>
                    <th>Blood Type</th>
                    <th>Contact Number</th>
                    <th>Email</th>                       
                </thead>

                <tbody id="response-blood-donor">
                    <?php  
                            if(isset($count_blood_donor) && $count_blood_donor > 0){
                                while($rows_blood_donor = mysqli_fetch_array($result_blood_donor)){
                    ?>
                                    <tr>
                                        <td><?php echo $rows_blood_donor['f_name'];?></td>
                                        <td><?php echo $rows_blood_donor['l_name'];?></td>
                                        <td><?php echo $rows_blood_donor['city'];?></td>
                                        <td><?php echo $rows_blood_donor['bloodtype'];?></td>
                                        <td><?php echo $rows_blood_donor['contact_number'];?></td>
                                        <td><?php echo $rows_blood_donor['email'];?></td>                                          
                                    </tr> 
                            
                            <?php

                                }
                            }
                            else{
                                echo "No Donor found";
                            }
                        ?>
                </tbody>


            </table>
        </div>
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


    


<script>
    $("#ticket").hide();
    $("#find-blood").hide();
    $("#show-blood-donor").hide();



</script>
    

   
</body>
</html>