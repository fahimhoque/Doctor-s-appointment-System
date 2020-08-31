<?php
session_start();
require('views/config.php');
require('views/user/time-slot.php');
require('controller/user/getUserDetails.php');

$user_id                    = $_SESSION['user_id'];
$doctor_id                  = $_GET['doctor_id'];
$selected_date              = $_GET['date'];


$sql = "SELECT * FROM DOCTOR WHERE id = '$doctor_id'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
$rows = mysqli_fetch_array($result);
// Getting start time and end times from database
$start_time = $rows['start_time'];
$end_time   = $rows['end_time'];
$duration = 30;
$cleanup = $rows['cleanup_m'];
$timeslots = timeslots($duration, $cleanup, $start_time, $end_time);

//Get Booked Times
//Array: will contain all booked times on selected date and for selected doctor
$bookedTimes = array();
$sql_booked_times  = "SELECT * FROM appointment WHERE appointment_date = '$selected_date' AND doctor_id = '$doctor_id'";
$result_booked_times = mysqli_query($conn, $sql_booked_times);
$count_booked_times  = mysqli_num_rows($result_booked_times);
if($count_booked_times > 0)
{
	while($rows_booked_times = mysqli_fetch_array($result_booked_times)){
		$bookedTimes[] =  date('h:i A', strtotime($rows_booked_times['appointment_time']));
	}
}
//Checking for available slots
$availableSlots = array_diff(array_merge($bookedTimes, $timeslots), array_intersect($bookedTimes, $timeslots));


?>


<!DOCTYPE html>
<html>
<head>
	<title>Make Appointment</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top: 35px;">	
	 	<form action="" method="POST">
	 		<!--User Information-->
	 		<div class="row">
	 			<div class="col-md-4">
	 				<label>User Id</label>
	 				<input type="text" class="form-control" placeholder="<?php echo $user_id?>" readonly>
	 			</div>
	 			<div class="col-md-4">
	 				<label>User Name</label>
	 				<input type="text" class="form-control" placeholder="<?php echo $user_id?>" readonly>
	 			</div>
	 		</div>




		  	<div class="row" style="margin-top: 35px;">
		    	<div class="col-md-4">

		      		<input type="text" class="form-control" placeholder="Patient First name">
		    	</div>
		    	<div class="col-md-4">
		      		<input type="text" class="form-control" placeholder="Patient Last name">
		    	</div>
		    	<div class="col-md-4">
		  			<input type="text" class="form-control" placeholder="Contact">
		  		</div>
		  	</div>
		  	<div class="row" style="margin-top: 35px;">
		  		<div class="col-md-4">
		      		<select class="form-control" name="gender">
		      			<option>Male</option>
		      			<option>Female</option>
		      			<option>Other</option>
		      			<option>Rather not say</option>
		      		</select>
		    	</div>
		  		<div class="col-md-4">
		  			<input type="text" class="form-control" placeholder="Age">
		  		</div>
		  		<div class="col-md-4">
		      		<select class="form-control" name="gender">
		      			<option>A+</option>
		      			<option>A-</option>
		      			<option>B+</option>
		      			<option>B-</option>
		      			<option>AB+</option>
		      			<option>AB-</option>
		      			<option>O+</option>
		      			<option>O-</option>
		      		</select>
		    	</div>		  		
		  	</div>
		  	<div class="row" style="margin-top: 35px;">
		  		<div class="col-md-2">
		  			<input class="btn btn-success form-control" name="" type="submit" value="Sbmit">
		  		</div>
		  	</div>
		</form>
	 	<h3>Available times</h3>
	 	<div class="row">
	 		<div class="col-md-4">
	 			<select class="form-control" name="">
		 			<?php
						foreach ($availableSlots as $as) {
					?>	
							<option><?php echo $as; ?></option>
					<?php
			 			}
			 		?>
		 		</select>
	 		</div>
	 	</div>
	</div>
	
	
	
			
	
</body>
</html>
