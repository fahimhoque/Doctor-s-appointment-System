<?php 
session_start();
$user_id    = $_SESSION['id'];
$user_fname = $_SESSION['f_name'];
$user_lname = $_SESSION['l_name'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Find Doctor: <?php echo $user_fname." ".$user_lname?></title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="views/paitent/scripts/find-doctor.js"></script>

	<link rel="stylesheet" type="text/css" href="">
	
	<link rel="stylesheet" type="text/css" href="views/patient/style/find-doctor.css">
</head>
<body>
	<div id="container">

  <span class="input">
    <input type="text" class="input__field" id="input-1" />
    <label for="input-1" class="input__label">
      <span class="input__label-content">First Name</span>
  </label>
  </span>

  <span class="input">
    <input type="text" class="input__field" id="input-2" />
    <label for="input-2" class="input__label">
      <span class="input__label-content">Last Name</span>
    </label>
  </span>

  <span class="input">
    <input type="text" class="input__field" id="input-3" />
    <label for="input-3" class="input__label">
      <span class="input__label-content">Phone Number</span>
    </label>
  </span>

  <span class="input">
    <input type="text" class="input__field" id="input-4" />
    <label for="input-4" class="input__label">
      <span class="input__label-content">Email Address</span>
    </label>
  </span>

  <span class="input message">
    <textarea class="input__field" id="input-5"></textarea>
    <label for="input-5" class="input__label">
      <span class="input__label-content">Message</span>
    </label>
  </span>

  <button id="send-button" type="button">Send</button>

</div>













<!--☝ NOTHING TO BE SEEN HERE ☝-->
<div class="footer">Input Experiment – Study based on Codrops tutorials – by Izaias @ IUQO.com</h5>
</div>

</body>
</html>