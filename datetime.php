<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Date and Time</title>
	</head>
	<body>
		<?php
			echo "Today is: " . date("Y/m/d") . "<br>";
			echo "Today is: " . date("Y-m-d") . "<br>"; 
			echo "Today is: " . date("Y.m.d") . "<br>";
			echo "Today is: " . date("l") . "<br>";

			echo "2010 - " . date("Y") . "<br>";

			echo "The time is: " . date("h:i:sa") . "<br>";
			
			$d = strtotime("10:30pm April 15 2014");
			echo "Created date is: " . date("Y-m-d h:i:sa", $d) . "<br>";

			$d = strtotime("next Saturday");
			echo "Next Saturday is: " . date("Y-m-d h:i:sa", $d) . "<br>";
			
		?>
	</body>
</html>
