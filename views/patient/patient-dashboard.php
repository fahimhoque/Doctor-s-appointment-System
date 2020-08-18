<?php 
session_start();
$patient_id    = $_SESSION['id'];
$patient_lname = $_SESSION['l_name'];
$patient_fname = $_SESSION['f_name'];


?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard: Patient</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="views/patient/scripts/patient-dashboard.js"></script>

    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="views/patient/style/patient-dashboard.css">

     
</head>

<body>
	<div id="topBar" class="topBar">
		<a href="#">Dashboard</a>
		<input type="submit" name="logout_btn" id="logout_btn" value="Logout">
	</div>
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="#">Dashboard</a>
		<a href="#">My profile</a>
		<a href="#">Find Blood</a>
		<a href="#">Ticket</a>
	</div>
	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
	<div  id="content">
		<p><?php echo "patient id: ".$patient_id?></p>
	</div>
	
</body>

</html>