<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Include and Require</title>
	</head>
	<body>
		<?php 
			include 'menu.php';
		?>
		<h1>Welcome to my webpage!</h1>
		<p>Some text</p>
		<?php 
			include 'vars.php';
			echo "I have a " . $car . " that is painted " . $color . "<br>";
			/*include 'noFileExists.php';
			echo "I have a " . $car . " that is painted " . $color . "<br>";
			require 'noFileExists.php';
			echo "I have a " . $car . " that is painted " . $color . "<br>";*/
		?> 
		<p>Some more text</p>
		<?php 
			include 'footer.php'; 
		?>
	</body>
</html>
