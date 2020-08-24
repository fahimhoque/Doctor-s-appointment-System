<?php
session_start();
require('views/config.php');
$doctor_id = $_SESSION['id'];
$doctor_fname = $_SESSION['f_name'];
$doctor_lname = $_SESSION['l_name'];

date_default_timezone_set("Asia/Dhaka");
$today = date("Y-m-d");




?>
<!DOCTYPE html>
<html>
<head>
	<title>Settings: <?php echo "Dr. ".$_SESSION['f_name']." ".$_SESSION['l_name']; ?></title>
	<script src="views/doctor/scripts/navbar.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="views/doctor/style/doctor-preferences.css">
    <link rel="stylesheet" type="text/css" href="views/doctor/style/toggle-button.css">
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
		      <a href="doctor-dashboard" class="wui-side-menu-item">
		        <i class="fas  fa-home"></i>
		        <span class="box-title">Dashboard</span> 
		      </a>
		    </li>
		    <li>
		      <a href="#" class="wui-side-menu-item">
		        <i class="fas fa-clipboard"></i>
		        <span class="box-title">My Patients</span> 
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
		        <i class="fas fa-th"></i>
		        <span class="box-title">Forum</span> 
		      </a>
		    </li>
		    <li>
		      <a href="doctor-support" class="wui-side-menu-item">
		        <i class="fas fa-tags"></i>
		        <span class="box-title">Support</span> 
		      </a>
		    </li>
		    <li>
		      <a href="doctor-profile" class="wui-side-menu-item">
		        <i class="fas fa-user"></i>
		        <span class="box-title">Profile</span> 
		      </a>
		    </li>
		    <li>
		      <a href="" class="wui-side-menu-item active">
		        <i class="fas fa-cogs"></i>
		        <span class="box-title">Prefernces</span> 
		      </a>
		    </li>
		    <li style="margin-top:450px;">
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

		

	 	<div class="wui-content-main" style="margin-top: 30px; margin-left: 30px; font-family: 'Alata', sans-serif;">
	 		<h4>Dr <?php echo $doctor_fname." ".$doctor_lname?></h4>

	 		<div class="container-fluid" style="margin-top: 20px;">
	 			<h5 style="margin-left: -20px;">Select the days you want to work:</h5>
	 			<p>This feature is not yet available</p>
	 			<div class="row">
	 				<div>
	 					Sunday
				        <label class="switch">
				            <input type="checkbox">
				            <span class="slider"></span>
				        </label> 
				    </div>
				    <div style="margin-left: 50px;">
	 					Monday
				        <label class="switch">
				            <input type="checkbox">
				            <span class="slider"></span>
				        </label> 
				    </div>
				    <div style="margin-left: 50px;">
	 					Tuesday
				        <label class="switch">
				            <input type="checkbox">
				            <span class="slider"></span>
				        </label> 
				    </div>
				    <div style="margin-left: 50px;">
	 					Wednesday
				        <label class="switch">
				            <input type="checkbox">
				            <span class="slider"></span>
				        </label> 
				    </div>
				    <div style="margin-left: 50px;">
	 					Thursday
				        <label class="switch">
				            <input type="checkbox">
				            <span class="slider"></span>
				        </label> 
				    </div>
				    <div style="margin-left: 50px;">
	 					Friday
				        <label class="switch">
				            <input type="checkbox">
				            <span class="slider"></span>
				        </label> 
				    </div>
				    <div style="margin-left: 50px;">
	 					Saturday
				        <label class="switch">
				            <input type="checkbox">
				            <span class="slider"></span>
				        </label> 
				    </div>
	 			</div>
	 		</div>
	 		<div class="container-fluid" style="margin-top: 35px;">
	 			<div class="form-inline">
				  	<div class="form-group mb-2">
				    	<h5 style="margin-left: -25px;">How long do you need for each patient on average:</h5>
	 					<select class="form-control" style="margin-left: 25px;">
						  	<option>30 Minutes</option>
						  	<option>45 Minutes</option>
						  	<option>60 Minutes</option>
						</select>
				    </div>
				</div>
	 		</div>
	  	</div>
	</div>
	
	<div class="wui-overlay"></div>



</body>
</html>