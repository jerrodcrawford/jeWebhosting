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
    <div class="payment">
   
<br />
<br />
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="8JF88NAHABA44">
<table>
<tr><td><input type="hidden" name="on0" value="Choose your plan..."><h3 class="servicesH">Choose your plan below and click submit.</h3></td></tr><tr><td><select name="os0">
	<option value="E-Commerce">E-Commerce : $20.00 USD - monthly</option>
	<option value="Standard">Standard : $12.00 USD - monthly</option>
	<option value="Basic">Basic : $5.00 USD - monthly</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD"><br>
<br><br>
<img alt="<br />
<b>Notice</b>:  Undefined variable: alt_tag in <b>/home/ccl606/public_html/index.html</b> on line <b>340</b><br />
" title="<br />
<b>Notice</b>:  Undefined variable: alt_tag in <b>/home/ccl606/public_html/index.html</b> on line <b>340</b><br />
" src="http://www.credit-card-logos.com/images/multiple_credit-card-logos-2/credit_card_paypal_logos_2.gif" width="339" height="40" border="0" />
<br />
<br />
<button type="submit" class="btn btn-default" alt="PayPal - The safer, easier way to pay online!">Submit</button>
<!--<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">-->

</form>


</div>
</div>
    <?php include_once("footer.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://jewebhosting.com/js/bootstrap.js"></script>
  </body>
</html>
