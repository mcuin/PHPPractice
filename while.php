<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>While loops PHP</title>
	</head>
	<body>
		<?php
			$x = 1;
			
			while ($x <= 5) {
				echo "The number is: $x <br>";
				$x++;
			}

			$x = 1;
			do {
				echo "The number is: $x <br>";
				$x++;
			} while ($x <= 5);

			$x = 6;
			do {
				echo "The number is: $x <br>";
				$x++;
			} while ($x <= 5);
		?>
	</body>
</html>
