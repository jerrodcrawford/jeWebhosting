<?php
// Get info from fields
$fname = ($_POST['fname']);
$lname = ($_POST['lname']);
$email = ($_POST['email']);
$phoneArea = ($_POST['phoneArea']);
$phonePre = ($_POST['phonePre']);
$phoneSuffix = ($_POST['phoneSuffix']);
$TB = ($_POST['textbox']);
 
// Message information
$message = ("$fname $lname\n$email\n$phoneArea-$phonePre-$phoneSuffix\n$TB");
$message = wordwrap($message, 100);
// Email to address
mail('info@jewebhosting.com'.'4059242744@tmomail.net', 'Contact Us Request', $message);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J.Enterprise Web Hosting</title>
	
    <!-- Bootstrap -->
    <link rel="shortcut icon" href="http://www.jewebhosting.com/favicon.ico"/>
    <link href="css/jEntBootstrap.css" rel="stylesheet">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
   	<?php include_once("nav.php"); ?>
    <div class="thanks" align="center">
    <h2 class="servicesH">Thank you for your interest!<br>
We will be in contact with you soon.</h2>
</div>
</div>
    <?php include_once("footer.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://jewebhosting.com/js/bootstrap.js"></script>
  </body>
</html>
