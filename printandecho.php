<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Print and Echo</title>
	</head>
	<body>
		<?php
			echo "<h2>PHP is fun!</h2><br>";
			echo "Hello World!<br>";
			echo "I'm about to learn PHP.<br>";
			echo "This", "string", "is", "made", "of", "multiple statements.<br>";
			$txt1 = "Learn PHP";
			$txt2 = "W3schools.com";
			$cars = array("Volvo", "BMW", "Toyota");

			echo "$txt1<br>";
			echo "Study PHP at $txt2<br>";
			echo "My car is a {$cars[0]}";
			
			print "<h2>PHP is fun!</h2><br>";
			print "Hello World!<br>";
			print "I'm about to learn PHP.<br>";
			print "$txt1<br>";
			print "Study PHP at $txt2<br>";
			print "My car is a {$cars[0]}";
		?>
	</body>
</html>
