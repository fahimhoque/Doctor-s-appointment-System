<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome Dr. " . $_SESSION['email'] . "!";
} else {
    echo "Please log in first to see this page.";
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Dashboard</title>
</head>
<body>
	<h1>Doctor Dashboard</h1>
</body>
</html>