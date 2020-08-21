<?php
session_start();
require('views/config.php');
$doctor_id = $_SESSION['id'];


date_default_timezone_set("Asia/Dhaka");
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

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard: DOCTOR</title>
	<script src="views/doctor/scripts/doctor-dashboard.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="views/doctor/style/doctor-dashboard.css">
	    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	<div class="wui-side-menu open pinned" data-wui-theme="dark">
		<div class="wui-side-menu-header">
		    <a href="#" class="wui-side-menu-trigger"><i class="fa fa-bars"></i></a>
		    <a href="#" class="wui-side-menu-pin-trigger">
		      	<i class="fa fa-thumb-tack"></i>
		    </a>
		</div>    
	  	<ul class="wui-side-menu-items">
		    <li>
		      <a href="#" class="wui-side-menu-item active">
		        <i class="fas  fa-home"></i>
		        <span class="box-title">Dashboard</span> 
		      </a>
		    </li>
		    <li>
		      <a href="#" class="wui-side-menu-item">
		        <i class="box-ico fa fa-list-ol fa-fw"></i>
		        <span class="box-title">Something</span> 
		      </a>
		    </li>
		    <li>
		      <a href="find-blood" class="wui-side-menu-item">
		        <i class="fas fa-tint"></i>
		        <span class="box-title">Find Blood</span> 
		      </a>
		    </li>
		    <li>
		      <a href="#" class="wui-side-menu-item">
		        <i class="box-ico fa fa-list-alt fa-fw"></i>
		        <span class="box-title">Something</span> 
		      </a>
		    </li>
		    <li>
		      <a href="doctor/support" class="wui-side-menu-item">
		        <i class="fas fa-tags"></i>
		        <span class="box-title">Support</span> 
		      </a>
		    </li>
		    <li>
		      <a href="#" class="wui-side-menu-item">
		        <i class="fas fa-cogs"></i>
		        <span class="box-title">Settings</span> 
		      </a>
		    </li>
		    <li style="margin-top: 520px;">
		      <a href="doctor-logout" class="wui-side-menu-item">
		        <i class="fas  fa-power-off"></i>
		        <span class="box-title">Logout</span> 
		      </a>
		    </li>
	  	</ul>
	</div>

	<div class="wui-content">
		<div class="wui-content-header">
		    <a href="#" class="wui-side-menu-trigger"><i class="fa fa-bars"></i></a>
		</div>


	 	<div class="wui-content-main">

		    <h4><?php echo "Welcome Dr. ".$_SESSION['f_name']." ".$_SESSION['l_name']; ?></h4>
		    <div id="events"></div>
		    <div id="show-statistics">
                <section class="statistics">
                    <div class="container-fluid">
                      	<div class="row">
                        	<div class="col-md-4">
                          		<div class="box">
                            		<i class="fa fa-users fa-fw bg-primary"></i>
                            		<div class="info">
                              			<h3><?php echo $count_appointments_today; ?></h3> <span>Appointments</span>
                              			<p>Total appointments today</p>
                            		</div>
                          		</div>
                       		</div>
                        	<div class="col-md-4">
                          		<div class="box">
		                            <i class="fa fa-medkit fa-fw danger"></i>
		                            <div class="info">
	                              		<h3><?php echo $count_appointments; ?></h3> <span>Appointments</span>
	                              		<p>Total appointmetns</p>
	                            	</div>
                          		</div>
                        	</div>
                        	<div class="col-md-4">
                          		<div class="box">
                            		<i class="fa fa-tags fa-fw success"></i>
                            		<div class="info">
		                              	<h3><?php echo $count_doctor_tickets; ?></h3> <span>Tickets Filed</span>
		                              	<p>1 Issue solved</p>
                            		</div>
                          		</div>
                        	</div>
                      	</div>
                    </div>
                </section>
            </div>
            <div id="show-appointments">
            	<?php echo "Today is " . $today . "<br>"; ?>
            </div>


	  	</div>
	</div>
	
	<div class="wui-overlay"></div>



</body>
</html>