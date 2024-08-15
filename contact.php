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
    <script type="text/javascript">
		function check_info(){
		var fname = document.getElementById('fname').value;
		var lname = document.getElementById('lname').value;
		var email = document.getElementById('email').value;
		var errormessage = "";
		
		if (document.getElementById('fname').value == ""){
			errormessage += "Please enter your first name \n";
			document.getElementById('fname').style.borderColor = "red";
			}
		if(errormessage != ""){
			alert(errormessage);
			return false;
		}
		if (document.getElementById('lname').value == ""){
			errormessage += "Please enter your last name. \n";
			document.getElementById('lname').style.borderColor = "red";
			}
		if(errormessage != ""){
			alert(errormessage);
			return false;
		}
		if (document.getElementById('email').value == ""){
			errormessage += "Please enter your email address. \n";
			document.getElementById('email').style.borderColor = "red";
			}
		if(errormessage != ""){
			alert(errormessage);
			return false;
		}
		if (document.getElementById('phoneArea').value == ""){
			errormessage += "Please enter your phone number. \n";
			document.getElementById('phoneArea').style.borderColor = "red";
			}
		if(errormessage != ""){
			alert(errormessage);
			return false;
		}
		else{
			return true;
		}
	}
	
	</script>
  </head>
  <body>
    <div class="container">
   	<?php include_once("nav.php"); ?>
    <div class="contact">
    <h3 class="servicesH">You can reach us between normal business hours at 405-757-4348 or just fill out the form below to request more info! Please allow up to 24 hours for a response.</h3>
    <form role="form" action="thanks.php" method="post" onSubmit="return check_info();">
  <div class="form-group">
    <p><label for="fname has-error">First Name</label>
    <input type="fname" class="form-control" id="fname" name="fname" placeholder="Enter First Name">
    <label for="lname">Last Name</label>
    <input type="lname" class="form-control" id="lname" name="lname" placeholder="Enter Last Name"></p>
  </div>
  <div class="form-group">
    <p><label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
    <label for="phoneArea">Phone Number</label>
    <input type="phoneArea" class="form-control" id="phoneArea" name="phoneArea" placeholder="123-456-7890" size="3"> <!--<label for="phonePre">-</label>
    <input type="phonePre" class="form-control" id="phonePre" name="phonePre" placeholder="456" size="3"> <label for="phoneSuffix">-</label>
    <input type="phoneSuffix" class="form-control" id="phoneSuffix" name="phoneSuffix" placeholder="789" size="4">
 -->    </p>
  </div><p>Message:
  <textarea class="form-control" rows="10" name="textbox"></textarea></p>
  <br />
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<br />
<br />
</div>
</div>
    <?php include_once("footer.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://jewebhosting.com/js/bootstrap.js"></script>
  </body>
</html>
