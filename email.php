<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Email</title>
	</head>
	<body>
		<h2>Email Form</h2>
		<?php
			if (!isset ($_POST["submit"])) {
			?>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					From: <input type="text" name="from"><br>
					Subject: <input typ="text" name="subject"><br>
					Message: <textarea rows="10" cols="40" name="message"></textarea><br>
					<input type="submit" name ="submit" value="Submit Email">
				</form>
				<?php
			} else {
				if (isset($_POST["from"])) {
					$from = $_POST["from"];
					$subject = $_POST["subject"];
					$message = $_POST["message"];
					$message = wordwrap($message, 70);
					mail("mykcuin@gmail.com", $subject, $message, "From: $from\n");
					echo "Thank you for the email.";
				}
			}
		?>
	</body>
</html>
