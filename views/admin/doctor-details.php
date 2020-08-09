
<?php

require('config.php');
$sql = "SELECT * FROM doctor";
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
			<!--<td><a href="fetch-doctor-details?id=<?php //echo $rows['id'];?>"> Options</a></td>-->
			<td><input class="edit_data" type="button" name="edit" value="Edit" id="<?php echo $rows['id'];?> "></td>
			
		</tr>

		<?php
		

	}
}
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
        $(document).on('click','.edit_data', function(){
  			var currentId = $(this).attr('id');
  			//alert(currentId);
  			
                $.ajax({
                    url: 'views/admin/fetch-doctor-details.php', 
                    type: 'POST',
                    data: {currentId: currentId},
                    success: function(result){
                        alert(currentId);
                    }
                
            });
		});
	});
</script>


