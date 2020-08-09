<?php

require('config.php');

$doctor_id = $_POST['currentId'];
$sql = "SELECT id, f_name, email, gender FROM doctor WHERE id = '$doctor_id'";
$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);
if($count > 0){
	while($rows = mysqli_fetch_array($result)){

		?>
		<tr>
			<td><?php echo $rows['id'];?> </td>
			<td><?php echo $rows['f_name'];?></td>
			
			<td><?php echo $rows['email'];?></td>
			
			<td><?php echo $rows['gender'];?></td>
			<!--<td><a href="fetch-doctor-details?id=<?php //echo $rows['id'];?>"> Options</a></td>-->
			
			
		</tr>

		<?php
		

	}
}
?>