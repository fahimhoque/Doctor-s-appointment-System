<?php  
require_once 'models/config.php';
require_once 'controller/doctor/doctorLoginController.php';

?>





<!DOCTYPE html>
<html>
<head>
	<title>Doctor Login</title>
	<link rel="stylesheet" type="text/css" href="views/doctor/style/doctor-login.css">
</head>
<body>
  	<div class="container">
  		<div class="form">
    		<div class="sign-in-section">
		      	<h1>Log in</h1> 
      			<form action="" method="POST">
			        <div class="form-field">
			          	<label for="email">Email</label>
			          	<input id="email" type="text" name="email_doctor" placeholder="Email" />
			        </div>
			        <div class="form-field">
			          	<label for="password">Password</label>
			          	<input id="password" type="password" name="password_doctor" placeholder="Password" />
			        </div>
		        	<div class="form-options">
		          		<a href="#">Forgot Password?</a>
		        	</div>
		        	<div class="form-field">
		          		<input type="submit" class="btn btn-signin" name="btn_login" value="Login" />
		        	</div>
		      	</form>
		      	<div class="links">
			        <a href="#">Privacy Policy</a>
			        <a href="#">Terms & Conditions</a> 
		      	</div>
    		</div>
  		</div>
	</div>
</body>
</html>