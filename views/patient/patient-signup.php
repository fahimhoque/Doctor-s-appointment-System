<?php
	require('config.php');
	if (isset($_POST['btn_signup'])){
		$fname = $_POST['firstname_patient'];
		$lname = $_POST['lastname_patient'];
		$email = $_POST['email_patient'];
		$contact_number = $_POST['contact_patient'];
		$gender = $_POST['gender'];
		$password = $_POST['password_patient'];
		$confirm_password = $_POST['confirm_password_patient'];


		$sql = "INSERT INTO patient (f_name, l_name, email, contact_number,gender, password) 
			VALUES ('$fname','$lname','$email','$contact_number','$gender','$password')";
		$result = mysqli_query($conn,$sql);
		if($result)
		{
			header("location: patient-account-created");
		}
		else{
			echo "Error: ".$sql;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient Signup</title>
	<link rel="stylesheet" type="text/css" href="views/patient/style/patient-signup.css">
</head>
<body>
  	<div class="container">
  		<div class="form">
    		<div class="sign-in-section">
		      	<h1>SignUp</h1> 
      			<form action="" method="POST">
			        <div class="form-field">
			          	<label>Fist Name</label>
			          	<input type="text" name="firstname_patient" placeholder="Fist Name" />
			        </div>
			        <div class="form-field">
			          	<label>Last Name</label>
			          	<input type="text" name="lastname_patient" placeholder="Last Name" />
			        </div>
			        <div class="form-field">
			          	<label>Email</label>
			          	<input type="text" name="email_patient" placeholder="Email" />
			        </div>
			        <div class="form-field">
			          	<label>Contact Number</label>
			          	<input type="text" name="contact_patient" placeholder="Phone Number" />
			        </div>

			        <div class="radio-group">
			        	<p>Gender</p>
				        <label>
				        	<input type="radio" name="gender" value="Male">
				        	Male
				        	<span></span>
				        </label>
				        <label>
				        	<input type="radio" name="gender" value="Female">
				        	Female
				        	<span></span>
				        </label>
				        <label>
				        	<input type="radio" name="gender" value="Other">
				        	Other
				        	<span></span>
				        </label>
			        </div>


			        <div class="form-field">
			          	<label>Password</label>
			          	<input type="password" name="password_patient" placeholder="Password" />
			        </div>
			        <div class="form-field">
			          	<label>Confirm Password</label>
			          	<input type="password" name="confirm_password_patient" placeholder="Confirm Password" />
			        </div>		  
		        	<div class="form-field">
		          		<input type="submit" class="btn btn-signin" name="btn_signup" value="Submit" />
		        	</div>
		      	</form>
		      	<div class="links">
			        <a href="patient-login">Login here!</a>
			        <a href="#">Terms & Conditions</a> 
		      	</div>
    		</div>
  		</div>
	</div>
</body>
</html>
