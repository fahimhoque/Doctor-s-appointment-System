<?php
require('views/config.php');
session_start();
$user_id = $_SESSION['id'];
$sql_user = "SELECT * FROM USER WHERE id = '$user_id'";
$result_user = mysqli_query($conn, $sql_user);
$rows_user =  mysqli_fetch_array($result_user);

date_default_timezone_set('UTC');


if (isset($_POST['btn_find'])){
	$city_name = $_POST['City'];
	$specialization = $_POST['specialization'];
	$sql_find = "SELECT * FROM DOCTOR WHERE specialization =  '$specialization' AND city = '$city_name' ";
	$result = mysqli_query($conn, $sql_find);
	$count = mysqli_num_rows($result);
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard <?php echo $user_id?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--JQuery CDN-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="views/user/scripts/navbar.js"></script>
	<script src="views/user/scripts/user-dashboard.js"></script>
	
	<!--Font Awesome Links-->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<!--Google Font-->
	<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="views/user/style/navbar.css">
	<link rel="stylesheet" type="text/css" href="views/user/style/user-dashboard.css">
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
		        <span class="box-title">Find Doctor</span> 
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
		      <a href="doctor-support" class="wui-side-menu-item">
		        <i class="fas fa-tags"></i>
		        <span class="box-title">Support</span> 
		      </a>
		    </li>
		    <li>
		      <a href="doctor-profile" class="wui-side-menu-item">
		        <i class="fas fa-user"></i>
		        <span class="box-title">Profile</span> 
		      </a>
		    </li>
		    <li style="margin-top: 200px;">
		      <a href="doctor-logout" class="wui-side-menu-item">
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
	 		<h5 style="margin-left: 10px; margin-top: 30px;"><?php echo $rows_user['f_name']." ".$rows_user['l_name']?></h5>
	 		<form method="POST" action="">
				<input type="text" name="City">
				<select name="specialization">
					<option value="Opthalmologist">Opthalmologist</option>
					<option value="Medicine">Medicine</option>
				</select>
				<!-- <input type="date" name="date">
				<input type="time" name="time"> -->
				<input type="submit" value="Submit" name="btn_find" id="btn_find">
			</form>
			<div id="show-doctor">
				<table>
					<thead>
						<th>ID</th>
						<th>First Name</th>
						<th>Start Time</th>
						<th>End Time</th>
						<th>Action</th>
					</thead>
				
					<?php
					if(isset($count) && $count > 0)
					{
						while($rows =  mysqli_fetch_array($result)){
					?>
					<tr>
						<td><?php echo $rows['id'];?></td>
						<td><?php echo $rows['f_name']; ?></td>
						<td><?php echo date('h A', strtotime($rows['start_time'])) ;?></td>
						<td><?php echo date('h A', strtotime($rows['end_time'])) ;?></td>
						<!-- <td>
							<input type="submit" class="make-appointment" name="submit_btn" 
							value="Expand" id="<?php //echo $rows['id'];?>">
						</td> -->

						<td>
							<a href="make-appointment" target="_blank" class="make-appointment-process" id="<?php echo $rows['id'];?>">Expand</a>
						</td>
						<td>
							<select>
								<option>A</option>
								<option>B</option>
								<option>C</option>
							</select>

						</td>

					</tr>
					
					

					<?php
						}
					}
					?>
				</table>
				
			</div>
		</div>
	<div class="wui-overlay"></div>
	
	
	<script type="text/javascript">
		$(document).on('click', '.make-appointment-process', function(){  
        var doctor_id = $(this).attr("id");  
        if(doctor_id != '')  
        {  
            $.ajax({  
                url:"views/user/make-appointment.php",  
                method:"POST",  
                data:{doctor_id:doctor_id},
                dataType:"json",   
                success:function(data){  
                    console.log(doctor_id);  
                }  
            });  
        }            
    });
	</script>
</body>
</html>


