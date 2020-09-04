<?php
	session_start();
	require_once 'models/config.php';

	$hasError          = false;
 
	if(isset($_POST["btn_submit"])){
		$user_id                = $_POST['user_id'];
		$ticket_file_date       = $_POST['filed_on'];
		$subject                = $_POST['subject'];
		$details                = $_POST['details'];
		
		

		if(!$hasError){
			if(file_ticket($user_id, $ticket_file_date, $subject, $details)){
				header('location: user-dashboard');
				echo '<script>alert("Ticket Filed")</script>';
			}else{
				echo '<script>alert("Something went  wrong")</script>';
				
			}
		}
	}
	
	function file_ticket($user_id, $ticket_file_date, $subject, $details){
		$query = "INSERT INTO `user_tickets`(`user_id`, `ticket_file_date`, `subject`, `details`) VALUES ('$user_id','$ticket_file_date','$subject','$details')";

		execute($query);
		return true;
		
	}


?>