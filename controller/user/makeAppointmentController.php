<?php
	require_once 'models/config.php';

	$hasError          = false;
 
	if(isset($_POST["btn_submit"])){
		$appointment_date  = $_POST['appointment_date'];
		$booked_on         = $_POST['booked_on'];
		$appointment_time  = $_POST['appointment_time'];
		$user_id           = $_POST['user_id'];
		$doctor_id         = $_POST['doctor_id'];
		$patient_fname     = $_POST['patient_fname'];
		$patient_lname     = $_POST['patient_lname'];
		$patient_contact   = $_POST['patient_contact'];
		$patient_gender    = $_POST['patient_gender'];
		$patient_age       = $_POST['patient_age'];
		$patient_bloodtype = $_POST['patient_bloodType'];

		if(!$hasError){
			if(make_appointment($appointment_date, $booked_on, $appointment_time, $user_id, $doctor_id, $patient_fname, $patient_lname, $patient_contact, $patient_gender,
								$patient_age, $patient_bloodtype)){
				header("Location: user-dashboard");
			}else
			{
				echo '<script>alert("Something went  wrong")</script>';
				
			}
		}
	}
	
	function make_appointment($appointment_date, $booked_on, $appointment_time, $user_id, $doctor_id, $patient_fname, $patient_lname, $patient_contact, $patient_gender,
								$patient_age, $patient_bloodtype){
		$query = "INSERT INTO 
					appointment (appointment_date, booked_on, appointment_time,
								user_id, doctor_id, patient_fname, 
								patient_lname,patient_contact, patient_gender, 
								patient_age, patient_bloodtype) 

					VALUES ('$appointment_date', '$booked_on', STR_TO_DATE('$appointment_time', '%l:%i %p' ),
							'$user_id', '$doctor_id', '$patient_fname',
						    '$patient_lname', '$patient_contact', '$patient_gender',
						    '$patient_age', '$patient_bloodtype') ";

		execute($query);
		return true;
		
	}


?>
