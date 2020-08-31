<?php
require_once 'models/config.php';


function getUserData($user_id)
{
	$query = "SELECT * FROM `user` WHERE id = '$user_id'";
	$data = getResult($query);
	return $data;
}




