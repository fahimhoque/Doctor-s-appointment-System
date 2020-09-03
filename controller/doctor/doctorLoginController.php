<?php
	session_start();
	require_once 'models/config.php';
	$name          ="";
	$err_name      ="";
	$email         ="";
	$err_email     ="";
	$hasError      =false;

	if(isset($_POST["btn_login"])){
		//validation
		if(!$hasError){
			//authenticate
			if(authenticate($_POST["email_doctor"],$_POST["password_doctor"])){
				header("Location: doctor-dashboard");
			}else{
				echo "Username password invalid";
			}
		}
	}
	
	function authenticate($email,$password){
		// $password = md5($password);
		$query = "SELECT * FROM `doctor` WHERE email='$email' and password='$password'";
		$doctor=getArray($query);
		$_SESSION['doctor_id'] = $doctor['id'];
		return $doctor;
	}

?>