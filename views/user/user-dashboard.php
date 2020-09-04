<?php
session_start();
date_default_timezone_set('Asia/Dhaka');
require('views/config.php');


$user_id = $_SESSION['user_id'];
$sql_user = "SELECT * FROM USER WHERE id = '$user_id'";
$result_user = mysqli_query($conn, $sql_user);
$rows_user =  mysqli_fetch_array($result_user);



//today's appointment for user

$today = date("Y-m-d");
$sql_todays_appointment = "SELECT * FROM today_appointment WHERE user_id = '$user_id' AND appointment_date = '$today'";
$result_todays_appointment = mysqli_query($conn, $sql_todays_appointment);
$count_todays_appointment = mysqli_num_rows($result_todays_appointment);

if (isset($_POST['btn_find'])){
	$city_name = $_POST['City'];
	$specialization = $_POST['specialization'];
	$date = $_POST['date'];
	$sql_find = "SELECT * FROM DOCTOR WHERE specialization =  '$specialization' AND city = '$city_name' ";
	$result = mysqli_query($conn, $sql_find);
	$count = mysqli_num_rows($result);
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard: <?php echo $rows_user['f_name']?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--JQuery CDN-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
	<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
	<script src="views/user/scripts/navbar.js"></script>
	<script src="views/user/scripts/user-dashboard.js"></script>
	
	<!--Font Awesome Links-->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<!--Google Font-->
	<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">


	<!--Bootstrap CDN-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="views/user/style/navbar.css">
	<link rel="stylesheet" type="text/css" href="views/user/style/user-dashboard.css">
	<style type="text/css">
		.header{
			position:relative;
			left:0;
			top:0;
			width: 100%;
			background-color: black;
			color: white;
			text-align: center;
			font-family:consolas;
			padding:5px;
			
		}
	</style>
</head>
<body>
	<div class="wui-side-menu open pinned" data-wui-theme="dark">
		<div class="wui-side-menu-header">
		    <a href="#" class="wui-side-menu-trigger"><i class="fa fa-bars"></i></a>
		    <a href="#" class="wui-side-menu-pin-trigger">
		      	<i class="fa fa-thumb-tack"></i>
		    </a>
		</div>    
	  	<ul class="wui-side-menu-items">
		    <li>
		      <a href="#" class="wui-side-menu-item active">
		        <i class="fas  fa-home"></i>
		        <span class="box-title">Dashboard</span> 
		      </a>
		    </li>
		    <li>
		      <a href="#" class="wui-side-menu-item">
		        <i class="fas fa-medkit"></i>
		        <span class="box-title">History</span> 
		      </a>
		    </li>
		    <li>
		      <a href="find-blood" class="wui-side-menu-item">
		        <i class="fas fa-tint"></i>
		        <span class="box-title">Find Blood</span> 
		      </a>
		    </li>
		    <li>
		      <a href="#" class="wui-side-menu-item">
		        <i class="fas fa-th"></i>
		        <span class="box-title">Forum</span> 
		      </a>
		    </li>
		    <li>
		      <a href="user-support?user=<?php echo $user_id ?>" class="wui-side-menu-item">
		        <i class="fas fa-tags"></i>
		        <span class="box-title">Support</span> 
		      </a>
		    </li>
		    <li>
		      <a href="user-profile" class="wui-side-menu-item">
		        <i class="fas fa-user"></i>
		        <span class="box-title">Profile</span> 
		      </a>
		    </li>
		    <li style="margin-top: 200px;">
		      <a href="user-logout" class="wui-side-menu-item">
		        <i class="fas  fa-power-off"></i>
		        <span class="box-title">Logout</span> 
		      </a>
		    </li>
	  	</ul>
	</div>

	<div class="wui-content">
		<div class="wui-content-header">
		    <a href="#" class="wui-side-menu-trigger"><i class="fa fa-bars"></i></a>
		</div>
		
		
		
	 	<div class="wui-content-main">
	 		<!-- <div class="container">
				<div class="row">
					<div class="col-md-2" style="margin-top: 20px;">
						<h4><?php //echo $rows_user['id']?></h4>
						<h4><?php //echo $rows_user['f_name']?></h4>
						<h4><?php //echo $today?></h4>
					</div>
				</div>
			</div> -->	
			<div class="text-center" style="margin-left: -150px;">
				<h3 class="header">
					<?php echo $rows_user['f_name']." ".$rows_user['l_name']." # ".$rows_user['id']?>
				</h3>
			</div> 		
			<div class="container" style="margin-top: 50px;">
				<div class="row">

					<!-- Today's appointment -->
					<div class="col-md-6" style="margin-left: -150px; margin-right: 120px;">
						
						<h4>Today's Appointment</h4>
						<form action="" method="POST">
							<div class="form-group row">
								<div class="col-md-8">
									<label class="my-1 mr-2">Appointment ID:</label>
									<input type="text" class="form-control mb-2 mr-sm-2" name="" placeholder="Not yet available" readonly>
								</div>
								
								<div class="col-md-4">
									<label class="my-1 mr-2 selectpicker">Search</label>
									<input class="btn btn-success form-control disabled" type="submit" value="Find">
								</div>
							</div>
						</form>
						<table class="table table-borderless table-hover">
			                <thead>
			                    <th>Appointment ID</th>
			                    <th>Date</th>
			                    <th>Doctor's name</th>
			                    <th>Patient's Name</th>
			                    
			                        
			                </thead>

			                <tbody>
			                    <?php  
			                        if($count_todays_appointment > 0){
			                            while($rows_todays_appointment = mysqli_fetch_array($result_todays_appointment)){

			                    ?>
			                    <tr>
			                         <td><?php echo $rows_todays_appointment['appointment_id'];?></td>
			                         <td><?php echo date('h:i A', strtotime($rows_todays_appointment['appointment_time']));?></td>
			                         <td><?php echo "Dr. ".$rows_todays_appointment['f_name']." ".$rows_todays_appointment['l_name'];?></td>
			                         <td><?php echo $rows_todays_appointment['patient_fname']." ".$rows_todays_appointment['patient_lname'];?></td>
			                    </tr> 
			                    <?php
			        

			                            }
			                        }
			                        else
			                        {
			                        	echo "No appointment for today";
			                        }
			                    ?>
			                </tbody>
                		</table>

					</div>




					<!-- Search Doctor -->
					<div class="col-md-6">

						<h4>Find New Appointment</h4>
						<form action="" method="POST">
							<div class="form-group row">
								<div class="col-md-4">
									<label class="my-1 mr-2">City</label>
									<input type="text" class="form-control mb-2 mr-sm-2" name="City">
								</div>
								<div class="col-md-4">
									<label class="my-1 mr-2 selectpicker">Type</label>
									<select class="form-control" name="specialization">
										<option value="Opthalmologist">Eye Specialist</option>
										<option>Medicine</option>
										<option>Neurologist</option>
										<option>Dentist</option>
										<option value="Allergists">Allergy Specialist</option>
										<option value="Cardiologists">Cardiologists</option>

									</select>
								</div>
								
							</div>
							<!--Date And Search Button-->
							<div class="row">
								<div class="col-md-4 form-group"> <!-- Date input -->
							        <label class="control-label" for="date">Date</label>
							        <input class="form-control" type="date" name="date" value="<?php echo $today; ?>">

							    </div>	
							    <div class="col-md-4">
									<label class="my-1 mr-2 selectpicker">Search</label>
									<input class="btn btn-success form-control" name="btn_find" type="submit" value="Find">
								</div>
							</div>
						</form>
						<div id="show-doctor">
							<table class="table table table-borderless table-hover text-center">
			                    <thead>
			                        <th>ID</th>
			                        <th>First Name</th>
			                        <th>Last Name</th>
			                        <th>Start Time</th>
			                        <th>End Time</th>
			                        <th>Location</th>
			                        <th>Action</th>
			                        
			                    </thead>

			                    <tbody>
			                        <?php  
			                               if(isset($count) && $count > 0){
			                                    while($rows = mysqli_fetch_array($result)){

			                                        ?>
			                                        <tr>
			                                            <td><?php echo $rows['id'];?> </td>
			                                            <td><?php echo $rows['f_name'];?></td>
			                                            <td><?php echo $rows['l_name'];?></td>
			                                            <td><?php echo date('h A', strtotime($rows['start_time'])) ;?></td>
														<td><?php echo date('h A', strtotime($rows['end_time'])) ;?></td>
														<td><?php echo $rows['city']; ?></td>
			                                            <td>
			                                            	<a target="_blank" 
			                                            	href="make-appointment?doctor_id=<?php echo $rows['id'];?>&date=<?php echo $_POST['date']; ?>">
			                                            		Expand
			                                            	</a>
			                                            </td>
			                                        </tr> 
			                                        <?php
			                                    }
			                                }
			                        ?>
			                    </tbody>
                			</table>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
	</div>

	<div class="wui-overlay"></div>
	
	
	<script type="text/javascript">
		
	</script>
</body>
</html>
