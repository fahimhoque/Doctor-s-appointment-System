<?php
require_once 'models/config.php';


function getDoctorData($doctor_id){

	$query = "SELECT * FROM `doctor` WHERE id = '$doctor_id'";
	$data = getResult($query);
	return $data;
}
function getTodaysAppointment($doctor_id, $today){

	$query = "SELECT * FROM appointment WHERE doctor_id = '$doctor_id' AND appointment_date = '$today'";
	$data = getResult($query);
	return $data;
}

function getTotalAppointment($doctor_id)
{
	$query = "SELECT * FROM appointment WHERE doctor_id = '$doctor_id'";
	$data = getResult($query);
	return $data;
}
function getDoctorTickets($doctor_id)
{
	$query = "SELECT * FROM doctor_tickets WHERE doctor_id = '$doctor_id'";
	$data = getResult($query);
	return $data;
}