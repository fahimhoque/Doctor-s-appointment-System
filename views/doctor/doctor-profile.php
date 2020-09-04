<?php
session_start();
date_default_timezone_set("Asia/Dhaka");
require('views/config.php');

$doctor_id = $_SESSION['doctor_id'];




?>
<!DOCTYPE html>
<html>
<head>
	<title>Settings:</title>
	<script src="views/doctor/scripts/navbar.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="views/doctor/style/navbar.css">
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
		      <a href="" class="wui-side-menu-item active">
		        <i class="fas fa-user"></i>
		        <span class="box-title">Profile</span> 
		      </a>
		    </li>
		    <li>
		      <a href="doctor-preferences" class="wui-side-menu-item">
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
	 		
	  	</div>
	</div>
	
	<div class="wui-overlay"></div>



</body>
</html>

