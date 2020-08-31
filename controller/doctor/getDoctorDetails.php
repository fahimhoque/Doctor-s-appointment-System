<?php
require_once 'models/config.php';


function getDoctorData($doctor_id)
{
	$query = "SELECT * FROM `doctor` WHERE id = '$doctor_id'";
	$data = getResult($query);
	return $data;
}
