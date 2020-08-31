<?php
	require('models/config.php');

	$appointment_date  = ;
	$appointment_time  = ;
	$user_id           = ;
	$doctor_id         = ;
	$patient_fname     = ;
	$patient_lname     = ;
	$patient_contact   = ;
	$patient_gender    = ;
	$patient_age       = ;
	$patient_bloodtype = ;
 
	if(isset($_POST["btn_submit"])){
		//validation
		if(!$hasError){
			//authenticate
			if(make_appointment($appointment_date,
								$appointment_time, $user_id, $doctor_id, 
								$patient_fname, $patient_lname, 
								$patient_contact, $patient_gender,
								$patient_age, $patient_bloodtype))
			{
				header("Location: user-dashboard");
				
			}else{
				echo "Something went wrong";
			}
		}
	}
	
	function make_appointment($appointment_date,
								$appointment_time, $user_id, $doctor_id, 
								$patient_fname, $patient_lname,$patient_contact, $patient_gender,
								$patient_age, $patient_bloodtype){
		// $password = md5($password);
		$query = "INSERT INTO 
					appointment (appointment_date, appointment_time, 
								user_id, doctor_id, patient_fname, 
								patient_lname,patient_contact, patient_gender, 
								patient_age, patient_bloodtype) 

					VALUES ('$appointment_date','$appointment_time','$user_id',
							'$doctor_id','$patient_fname','$patient_lname','$patient_gender','$patient_contact','$patient_age','$patient_bloodtype') ";

		$booked = execute($query);
		return $booked;
	}


?>