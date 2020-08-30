<?php
	session_start();
	$user_id = $_SESSION['user_id'];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Henlo Dishum</title>
</head>
<body>
	<?php
		echo "string".$user_id;
	?>

</body>
</html>