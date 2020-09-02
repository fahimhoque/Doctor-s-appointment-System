<?php

$path = trim($_SERVER['REQUEST_URI'], '/');
$parsed_url = parse_url($path, PHP_URL_PATH);



$routes = [
	'das'=>                              'views/index.php',
	'das/find-blood' =>                  'views/blood/find-blood.php',


	//all admin related routes
	'das/admin-login' => 		         'views/admin/admin-login.php',
	'das/admin-dashboard' => 	         'views/admin/admin-dashboard.php',
	'das/admin-logout' =>                'views/admin/admin-logout.php',
	//'das/fetch-doctor-details' =>      'views/admin/fetch-doctor-details.php',


	//all patient related routes
	'das/user-login' =>                  'views/user/user-login.php',
	'das/user-logout' =>                 'views/user/user-logout.php',
	'das/user-signup' =>                 'views/user/user-signup.php',
	'das/user-profile' =>                'views/user/user-profile.php',
	'das/user-account-created' =>        'views/user/user-account-created.php',
	'das/user-dashboard' =>              'views/user/user-dashboard.php',
	'das/make-appointment' =>            'views/user/make-appointment.php',
	'das/user-support' =>                'views/user/user-support.php', 
	'das/find-doctor' =>                 'views/user/find-doctor.php',



	
	//all doctor related routes
	'das/doctor-login' =>                 'views/doctor/doctor-login.php',
	'das/doctor-logout' =>                'views/doctor/doctor-logout.php',
	'das/doctor-signup' =>                'views/doctor/doctor-signup.html',
	'das/doctor-dashboard' =>             'views/doctor/doctor-dashboard.php',
	'das/doctor-profile' =>               'views/doctor/doctor-profile.php',
	'das/doctor-support' =>               'views/doctor/support.php',
	'das/doctor-preferences' =>           'views/doctor/doctor-preferences.php'


];
if (array_key_exists($parsed_url,$routes)) {
	require $routes[$parsed_url];
}else {

	require 'views/404-Not-Found.php';
}

