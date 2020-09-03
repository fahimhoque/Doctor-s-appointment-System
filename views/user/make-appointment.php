<?php
session_start();
date_default_timezone_set('Asia/Dhaka');
require_once 'views/config.php';
require_once 'views/user/time-slot.php';
require_once 'controller/user/getUserDetails.php';
require_once 'controller/doctor/getDoctorDetails.php';
require_once 'controller/user/makeAppointmentController.php';

$today = date("Y-m-d");

$user_id                    = $_SESSION['user_id'];
$doctor_id                  = $_GET['doctor_id'];
$selected_date              = $_GET['date'];
$user_data                  =  mysqli_fetch_array(getUserData($user_id));
$doctor_data                =  mysqli_fetch_array(getDoctorData($doctor_id));

// Getting start time and end times from database
$start_time                 = $doctor_data['start_time'];
$end_time                   = $doctor_data['end_time'];
$duration                   = 30;
$cleanup                    = $doctor_data['cleanup_m'];
$timeslots                  = timeslots($duration, $cleanup, $start_time, $end_time);

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

	 		<!--Start of User Information Segment-->
	 		<div class="row">
	 			<div class="col-md-12">
	 				<h4><b>User's Details</b></h4>
	 			</div>
	 			<div class="col-md-4">
	 				<label>User's Id</label>
	 				<input type        = "text" 
	 					   name        = "user_id"
	 					   value       = "<?php echo $user_id; ?>" 
	 					   class       = "form-control"  
	 					   placeholder = "<?php echo $user_id; ?>" 
	 					   readonly    = "true"
	 				>
	 			</div>
	 			<div class="col-md-4">
	 				<label>User's Name</label>
	 				<input type="text" 
	 					   name="username"
	 					   class="form-control" 
	 					   placeholder="<?php echo $user_data['f_name']." ".$user_data['l_name']; ?>" 
	 				readonly>
	 			</div>

	 			<div class="col-md-4">
	 				<label>User's Contact Number</label>
		  			<input type="text"
		  				name="user_contact" 
		  				class="form-control" 
		  				placeholder="<?php echo $user_data['contact_number']; ?>"
		  			readonly>
		  		</div>
		  		<div class="col-md-4">
	 				<label>Booked On</label>
		  			<input type="text"
		  				   name="booked_on" 
		  				   value="<?php echo $today; ?>"
		  				   class="form-control" 
		  				   placeholder="<?php echo $today; ?>"
		  			readonly>
		  		</div>
	 		</div>
	 		<!--End of User Information Segment-->



		  	<div class="row" style="margin-top: 35px;">
		  		<div class="col-md-12">
	 				<h4><b>Patient Details</b></h4>
	 			</div>
		    	<div class="col-md-4">
		      		<input type="text"
		      			   name="patient_fname" 
		      			   class="form-control" 
		      			   placeholder="Patient First name"
		      		>
		    	</div>
		    	<div class="col-md-4">
		      		<input type="text" 
		      			   name="patient_lname" 
		      			   class="form-control" 
		      			   placeholder="Patient Last name"
		      		>
		    	</div>
		    	<div class="col-md-4">
		  			<input type="text" 
		  				   name="patient_contact" 
		  				   class="form-control" 
		  				   placeholder="Contact"
		  			>
		  		</div>
		  		
		  	</div>
		  	<div class="row" style="margin-top: 35px;">
		  		<div class="col-md-4">
		      		<select class="form-control" name="patient_gender">
		      			<option>Male</option>
		      			<option>Female</option>
		      			<option>Other</option>
		      			<option>Rather not say</option>
		      		</select>
		    	</div>
		  		<div class="col-md-4">
		  			<input type="text" 
		  				   name="patient_age"
		  				   class="form-control" 
		  				   placeholder="Age"
		  			>
		  		</div>
		  		<div class="col-md-4">
		      		<select class="form-control" name="patient_bloodType">
		      			<option value="A+">A+</option>
		      			<option value="A-">A-</option>
		      			<option value="B+">B+</option>
		      			<option value="B-">B-</option>
		      			<option value="AB+">AB+</option>
		      			<option value="AB-">AB-</option>
		      			<option value="O+">O+</option>
		      			<option value="O-">O-</option>
		      		</select>
		    	</div>		  		
		  	</div>
		  	<div class="row" style="margin-top: 35px;">
		  		<div class="col-md-4">
		  			<label>Remarks</label>
		  			<input type="remarks"
		  				   name="" 
		  				   class="form-control" 
		  				   placeholder="Emergency, Report etc"
		  			>
		  		</div>
		  		<div class="col-md-4">
		  			<label>Short Description Of Porblem</label>
		  			<div class="md-form">
					  	<textarea id="" class="md-textarea form-control" rows="4"></textarea>
					</div>
		  		</div>
		  	</div>

		  	<!--Start of Doctor Details Segment-->
		  	<div class="row" style="margin-top: 35px;">
		  		<div class="col-md-12">
	 				<h4><b>Doctor Details</b></h4>
	 			</div>
		  		<div class="col-md-4">
	 				<label>Doctor's ID</label>
		  			<input type        ="text"
		  				   name        ="doctor_id" 
		  				   value       ="<?php echo $doctor_data['id']; ?>"
		  				   class       ="form-control" 
		  				   placeholder ="<?php echo $doctor_data['id']; ?>"
		  				   readonly    = "true"
		  			>
		  		</div>
		  		<div class="col-md-4">
	 				<label>Doctor's Name</label>
		  			<input type="text"
		  				name="user_contact" 
		  				class="form-control" 
		  				placeholder="<?php echo $doctor_data['f_name']." ".$doctor_data['l_name']; ?>"
		  			readonly>
		  		</div>
		  		<div class="col-md-4">
	 				<label>Doctor's Qualifications</label>
		  			<input type="text"
		  				name="user_contact" 
		  				class="form-control" 
		  				placeholder="MBBS, FCPS, FRSH, MD"
		  			readonly>
		  		</div>
		  	</div>

		  	
		  	<!--End of Doctor Details Segment-->


		  	<!--Start of Date and Time Segment-->
		  	<div class="row" style="margin-top: 35px;">
		  		<div class="col-md-12">
	 				<h4><b>Date and Time</b></h4>
	 			</div>
		 		<div class="col-md-4">
	 				<label>Selected Date</label>
		  			<input type="text"
		  				   name="appointment_date" 
		  				   value="<?php echo $selected_date; ?>"
		  				   class="form-control" 
		  				   placeholder="<?php echo $selected_date; ?>"
		  				   readonly="true"
		  			>
		  		</div>
		 		<div class="col-md-4">
		 			<label>Available Times</label>
		 			<select class="form-control" name="appointment_time">
			 			<?php
							foreach ($availableSlots as $as) {
						?>	
								<option id="option" value="<?php echo $as; ?>"><?php echo $as; ?></option>
						<?php
				 			}
				 		?>
			 		</select>
		 		</div>
		 	</div>
			<!--End of Date and Time Segment-->
		  	

		  	<div class="row" style="margin-top: 35px;">
		  		<div class="col-md-2">
		  			<input class="btn btn-success form-control" name="btn_submit" type="submit" value="Submit">
		  		</div>
		  	</div>
		</form>	
	</div>
	
	
	<script type="text/javascript">
		function show()
		{
			var x = document.getElementById("option");
			alert(x);
		}
	</script>
			
	
</body>
</html>
