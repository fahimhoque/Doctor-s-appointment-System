<?php
// session_start();

// if (isset($_POST['btn_login'])){
	
// 	// Assigning POST values to variables.
// 	$email = $_POST['email_patient'];
// 	$password = $_POST['password_patient'];

// 	$query = "SELECT * FROM `user` WHERE email='$email' and password='$password'";
	 
// 	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
// 	$count = mysqli_num_rows($result);

// 	if ($count == 1){
// 		$rows_patient = mysqli_fetch_array($result);
		
// 		$_SESSION['id']                 = $rows_patient['id'];
// 		$_SESSION['f_name']             = $rows_patient['f_name'];
// 		$_SESSION['l_name']             = $rows_patient['l_name'];
// 		$_SESSION['contact_number']     = $rows_patient['contact_number'];
// 		header('Location: user-dashboard');
// 	}
	
// 	else{
// 	echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
// 	echo "Invalid Login Credentials";

// 	}
// }



?>