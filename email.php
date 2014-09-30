<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Email</title>
	</head>
	<body>
		<?php
			function spamcheck($field) {
  				$field=filter_var($field, FILTER_SANITIZE_EMAIL);
  				if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
    					return TRUE;
				} else {
    					return FALSE;
  				}
			}
		?>

		<h2>Feedback Form</h2>
		<?php
			if (!isset($_POST["submit"])) {
  		?>
  				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  					From: <input type="text" name="from"><br>
  					Subject: <input type="text" name="subject"><br>
  					Message: <textarea rows="10" cols="40" name="message"></textarea><br>
  					<input type="submit" name="submit" value="Submit Feedback">
  				</form>
  		<?php 
			} else {  
  				if (isset($_POST["from"])) {
    					$mailcheck = spamcheck($_POST["from"]);
    					if ($mailcheck==FALSE) {
      						echo "Invalid input";
    					} else {
      						$from = $_POST["from"];
      						$subject = $_POST["subject"];
     						$message = $_POST["message"];
      						$message = wordwrap($message, 70);
      						mail("mykcuin@gmail.com",$subject,$message,"From: $from\n");
      						echo "Thank you for sending us feedback";
    					}				
  				}
			}
		?>	
	</body>
</html>
