<?php 
session_start();
$patient_id    = $_SESSION['id'];
$patient_lname = $_SESSION['l_name'];
$patient_fname = $_SESSION['f_name'];


?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard: USER</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Jquery CDN-->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<!--Font awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<!--Custom JS-->
	<script src="views/patient/scripts/patient-dashboard.js"></script>


	<!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="views/patient/style/patient-dashboard.css">
</head>
<body>
	<div class="layout">

	    <a class="header" href="#0">
	      	<i class="fa fa-bars"></i>
	      	<div class="header-user"><i class="fas fa-user-circle icon"></i>Hello John Dee</div>
	    </a>

	    <div class="sidebar">
		    <ul>
		        <li> <a class="sidebar-list-item" href="#0"> <i class="fas fa-home icon"></i><em>        Dashboard</em></a></li>
		        <li> <a class="sidebar-list-item" href="#0"> <i class="fas fa-medkit icon"></i><em>      Find Doctor</em></a></li>
		        <li> <a class="sidebar-list-item" href="#0"> <i class="fas fa-tint icon"></i><em>        Find Blood</em></a></li>
		        <li> <a class="sidebar-list-item" href="#0"> <i class="fas fa-tags icon"></i><em>        Support Ticket</em></a></li>
		        <li> <a class="sidebar-list-item" href="#0"> <i class="fas fa-cogs icon"></i><em>        Profile Settings</em></a></li>
		        <li> <a class="sidebar-list-item" href="#0"> <i class="fas fa-comments icon"></i><em>    Feedback</em></a></li>
		        <li> <a class="sidebar-list-item" href="#0"> <i class="fas fa-lightbulb icon"></i><em>   Suggestions</em></a></li>
		    </ul>
	    </div>

	    <main class="content">
	      	<h1>hello world</h1>
	    </main>

	</div>
</body>
</html>

