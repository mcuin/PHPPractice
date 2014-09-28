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

			$b = 10;
			
			function myTest2() {
				global $x, $b;
				$b = $x + $b;
			}

			myTest2();
			echo "$b<br>";

			$c = 10;

			function myTest3() {
				$GLOBALS['c'] = $GLOBALS['x'] + $GLOBALS['c'];
			}

			myTest3();
			echo "$c<br>";
		?>
	</body>
</html>
