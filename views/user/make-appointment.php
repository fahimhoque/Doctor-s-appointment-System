<?php
session_start();
require('views/config.php');
require('views/user/time-slot.php');

$x = $_GET['doctor_id'];
$sql = "SELECT * FROM DOCTOR WHERE id = '$x'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
$rows = mysqli_fetch_array($result);

// Getting start time and end times from database
$start_time = $rows['start_time'];
$end_time   = $rows['end_time'];
$duration = 30;
$cleanup = $rows['cleanup_m'];


?>


<!DOCTYPE html>
<html>
<head>
	<title>Make Appointment</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	 <div class="container">
	 	<div class="row">
	 		<?php
	 			$timeslots = timeslots($duration, $cleanup, $start_time, $end_time);
	 			foreach ($timeslots as $ts) {
	 		?>	
	 		<div class="col-md-2">
	 			<button class="btn btn-success"><?php echo $ts; ?></button>
	 		</div>		
	 		<?php
	 			}
	 		?>
	 	</div>
	 </div>
	
			
	
</body>
</html>
