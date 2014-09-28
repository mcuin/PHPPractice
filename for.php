<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP For Loop</title>
	</head>
	<body>
		<?php
			for ($x = 0; $x <= 10; $x++) {
				echo "The number is: $x <br>";
			}
			
			$colors = array("blue", "green", "red", "yellow");
			foreach ($colors as $value) {
				echo "$value <br>";
			}
		?>
	</body>
</html>  
