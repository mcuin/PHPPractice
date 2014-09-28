<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Functions</title>
	</head>
	<body>
		<?php
			function writeMsg() {
				echo "Hello world! <br>";
			}
	
			writeMsg();

			function familyName($fname, $year) {
				echo "$fname Refsnes. Born in $year.<br>";
			}

			familyName("Hege", "1975");
			familyName("Stale", "1978");
			familyName("Kai Jim", "1983");

			function setHeight($minHeight = 50) {
				echo "The height is: $minHeight <br>";
			}

			setHeight(350);
			setHeight();
			setHeight(135);
			setHeight(80);

			function sum($x, $y) {
				$z = $x + $y;
				return $z;
			}

			echo "5 + 10 = " . sum(10, 5) . "<br>";
			echo "7 + 13 = " . sum(7, 13) . "<br>";
			echo "2 + 4 = " . sum(2, 4) . "<br>";
		?>
	</body>
</html>
