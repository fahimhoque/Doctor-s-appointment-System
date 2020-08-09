<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    
} else {
    echo "You need to login first to view the dashboard";
    header('Location: admin-login');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>

    <!--Custom CSS Link-->
	<link rel="stylesheet" type="text/css" href="views/admin/style/admin-dashboard.css">

    <!--Bootstrap CSS CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">


    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <!--Custom JS Link-->
    <script src="views/admin/scripts/patient-details.js"></script>
    <script src="views/admin/scripts/admin-dashboard.js"></script>
	

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
	<!--NAVBAR-->
	<div class="wrapper">
        <div class="sidebar">
            <h2>DAS Admin</h2>
            <ul>
                <!--Dashboard which will be active on Login-->
                
                <li><a href="admin-dashboard"><i class="fas fa-th"></i>Dashboard</a></li>
                

                <!--Load Patient Data On Click-->
                <li><a href="javascript:void(0);" id="load-patient-data"><i class="fas fa-user"></i>Patients</a></li>


                <!--Load Doctor's Data on Click-->
                <li><a href="javascript:void(0);" id="load-doctor-data"><i class="fas fa-medkit"></i>Doctors</a></li>



                <!--Load Ticket's Data on Click-->
                <li><a href="#" id="tickets-details-load-link"><i class="fas fa-tags"></i>Tickets</a></li>


                <!--Load Settings on Click-->
                <li><a href="#"><i class="fas fa-cog"></i>Settings</button></a></li>


                <!--Logout-->
                
                <li><a href="admin-logout"><i class="fas fa-cog"></i>LogOut</button></a></li>
                
                

            </ul>
        </div>
        
        <div class="main_content">
            <div class="header">Welcome!! Have a nice day, <?php echo  $_SESSION['username'] . "!";?></div>
            

            <div id="show-patient-details">
                <h3>Patient Details</h3>
                <br>
                <input type="text" placeholder="Search by first name" name="find_patient" style="margin-left: 25px;">
                <button id="btn_search_patient" name="btn_search_patient"> Search</button>
                
                <br>
                <br>
                <table class="table table-stripped table-bordered text-center" id="patient-details-table">
                    <thead>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Comtact Number</th>
                        <th>Gender</th>
                        <th>Operations</th>
                        
                    </thead>

                    <tbody id="response-patient">
                        
                    </tbody>


                </table>
            </div>



            <div id="show-doctor-details">
                <h3>Doctor Details</h3>
                <br>
                <input type="text" placeholder="Search by first name" name="find_doctor" style="margin-left: 25px;">
                <button id="btn_search_doctor" name="btn_search_doctor"> Search</button>
                
                <br>
                <br>
                <table class="table table-stripped table-bordered text-center" id="doctor-details-table">
                    <thead>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Comtact Number</th>
                        <th>Gender</th>
                        <th>Action</th>
                        
                    </thead>

                    <tbody id="response-doctor">
                        
                    </tbody>
                    

                </table>
            </div>
              
        </div>
	</div>











    
    <script type="text/javascript">


        $("#show-doctor-details").hide();
        $("#show-patient-details").hide();

        //For Patients
        $(document).ready(function(){
            $("#load-patient-data").click(function(){
                $.ajax({
                    url: 'views/admin/patient-details.php', 
                    type: 'POST',
                    success: function(result){
                        $("#response-patient").html(result);
                    }
                });
            });

            $("#load-patient-data").click(function(){
                $("#show-patient-details").show();
                $("#show-doctor-details").hide();
              });

            $("#load-doctor-data").click(function(){
                $.ajax({
                    url: 'views/admin/doctor-details.php', 
                    type: 'POST',
                    success: function(result){
                        $("#response-doctor").html(result);
                    }
                });

                $("#show-doctor-details").show();
                $("#show-patient-details").hide();
              
            });
                       
            

        });

    </script>
    

</body>
</html>