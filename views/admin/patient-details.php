<?php

require('config.php');
$sql = "SELECT * FROM patient";
$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);
if($count > 0){
	while($rows = mysqli_fetch_array($result)){

?>
		<tr>
			<td><?php echo $rows['id'];?> </td>
			<td><?php echo $rows['f_name'];?></td>
			<td><?php echo $rows['l_name'];?></td>
			<td><?php echo $rows['email'];?></td>
			<td><?php echo $rows['contact_number'];?></td>
			<td><?php echo $rows['gender'];?></td>
			<td><a id="get-id" href="" onclick="get_id()">Edit</a></td>
		</tr>

<?php		

	}
}
?>

