<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Error Handling</title>
	</head>
	<body>
		<?php
			/*if (!file_exists("welcome.txt")) {
				die("Unable to open file.");
			} else {
				$file = fopen("welcome.txt", "r");
			}*/

			function customError($errno, $errstr) {
				echo "<b>Error: </b> [$errno] $errstr <br>";
				echo "Ending script. <br>";
				echo "Webmaster has been notified.<br>";
				error_log("Error: [$errno] $errstr" , 1, "mykcuin@gmail.com", "From: mykcuin@gmail.com"); 
				#die();
			}

			set_error_handler("customError", E_USER_WARNING);
			$test = 2;
			if ($test > 1) {
				trigger_error("Value must be 1 or below", E_USER_WARNING);
			}
		?>
	</body>
</html>
