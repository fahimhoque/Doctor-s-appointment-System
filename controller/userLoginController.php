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
			if(authenticate($_POST["email"],$_POST["password"])){
				header("Location: user-dashboard");
				// header("Location: views/test.php");
			}else{
				echo "Username password invalid";
			}
		}
	}
	
	function authenticate($email,$password){
		// $password = md5($password);
		$query = "SELECT * FROM `user` WHERE email='$email' and password='$password'";
		$user=getArray($query);
		$_SESSION['user_id'] = $user['id']; 
		return $user;
	}

?>