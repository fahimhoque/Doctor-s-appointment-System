<?php 
session_start();
$doctor_id    = $_SESSION['id'];
$doctor_fname = $_SESSION['f_name'];
$doctor_lname = $_SESSION['l_name'];



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="views/doctor/style/doctor_support.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


	<title>DAS : Support</title>
</head>

<body class="dark-scheme">
    <div id="wrap">
        <div id="main" class="container">
            <h1>DAS-Doctor Support</h1>


            <script async type="text/javascript" src="js/imgbb-2.js" charset="utf-8"></script>



            <div style="font-size:10pt">Welcome, <?php echo  $doctor_fname." # ".$doctor_id;?> </div>

            <a href="patient-ticket-record.php" class="clearfix pull-right btn btn-info btn-lg active" role="button">Your Support Tickets</a>
            <br>
            <p>Before sending a query please note :</p>
            <ul>
                <li>Go through our <a href="#" target="_blank">FAQ Section</a> for available solutions.</li>
            </ul>

            <div class="clearfix support-main">
            	<form role="form" method="post" action="support-process.php">
            		<input type="hidden" name="formtype" value="support_ticket">

            		<div class="form-group">
            			<input type="text" class="form-control" name="subject" placeholder="Subject" autofocus required>
            		</div>

            		<div class="form-group">
            			<textarea name="message" class="form-control" cols=40 rows=10 placeholder="Message" required></textarea>
            		</div>
            		<div class="form-group">
            			<button type="submit" class="btn btn-success">Submit</button>
            		</div>
            	
            	</form>
            </div>



    	</div>
    </div>


</body>
</html>
	