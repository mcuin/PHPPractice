<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Variables</title>
	</head>
	<body>
		<?php
			$x = 5;
			$y = 6;
			$z = $x + $y;
			echo $z;
			
			function myTest() {
				$a = 10;
				echo "<p>Variables inside of function: </p>";
				echo "Variable x is: $x <br>";
				echo "Variable a is: $a <br>";
			}

			myTest();
	
			echo "<p>Variables outside of function: </P>";
			echo "Variable x is: $x <br>";
			echo "Variable a is: $a <br>";
		?>
	</body>
</html>
