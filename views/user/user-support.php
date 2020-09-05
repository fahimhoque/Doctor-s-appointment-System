<?php

date_default_timezone_set('Asia/Dhaka');
require_once 'controller/user/getUserDetails.php';
require_once 'controller/user/userSupportController.php';

$user_id                    = $_SESSION['user_id'];
$today                      = date("Y-m-d");

$user_data                  = mysqli_fetch_array(getUserData($user_id));
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

	<title>DAS : Support</title>
</head>

<body class="dark-scheme">
    <div id="wrap">
        <div id="main" class="container">
            <h1>DAS-User Support</h1>

                <form role="form" method="post" action="" id="support-form">
                    <div style="font-size:12pt">Welcome, <?php echo  $user_data['f_name']." ".$user_data['l_name']?></div>
                    <div class="row">
                        <div class="col-md-1">
                            <label>User ID:</label>
                            <input type="text" 
                                   name="user_id" 
                                   value="<?php echo $user_id; ?>" 
                                   class="form-control" 
                                   placeholder="Contact"
                                   readonly = "true"
                            >
                        </div>
                        <div class="col-md-2">
                            <label>Date:</label>
                            <input type="text" 
                                   name="filed_on" 
                                   value="<?php echo $today; ?>" 
                                   class="form-control" 
                                   placeholder="Contact"
                                   readonly = "true"
                            >
                        </div>
                    </div>

                    <a href="user-support-log?user=<?php echo $user_id; ?>" class="clearfix pull-right btn btn-info btn-lg active" role="button">Your Support Tickets</a>
                    <br>
                    <p>Before sending a query please note :</p>
                    <ul>
                        <li>Go through our <a href="faq" target="_blank">FAQ Section</a> for available solutions.</li>
                    </ul>

                    <div class="clearfix support-main">
                    	
                    		<input type="hidden" name="formtype" value="support_ticket">

                    		<div class="form-group">
                    			<input type="text" class="form-control" name="subject" placeholder="Subject" autofocus required>
                    		</div>

                    		<div class="form-group">
                    			<textarea name="details" class="form-control" cols=40 rows=10 placeholder="Message" required></textarea>
                    		</div>
                    		<div class="form-group">
                    			
                                <input type="submit" name="btn_submit" class="btn btn-success" value="Submit">
                    		</div>
                    	
                    </div>
                </form>
    	</div>
    </div>


</body>
</html>