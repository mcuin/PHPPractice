<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Sorting</title>
	</head>
	<body>
		<?php
			$cars = array("Volvo", "BMW", "Toyota");
			sort($cars);
			$length = count($cars);
			for ($i = 0; $i <= $length; $i++) {
				echo $cars[$i] . "<br>";
			}

			$numbers = array(4, 6, 2, 22, 11);
			sort($numbers);
			$length2 = count($numbers);
			for ($i = 0; $i <= $length2; $i++) {
				echo $numbers[$i] . "<br>";
			}

			rsort($cars);
			for ($i = 0; $i <= $length; $i++) {
				echo $cars[$i] . "<br>";
			}
			
			rsort($numbers);
			for ($i = 0; $i <= $length2; $i++) {
				echo $numbers[$i] . "<br>";
			}

			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
			asort($age);
			foreach ($age as $x => $xValue) {
				echo "Key: " . $x . ", value " . $xValue . "<br>";
			}

			ksort($age);
			foreach ($age as $x => $xValue) {
				echo "Key: " . $x . ", value " . $xValue . "<br>";
			}

			arsort($age);
			foreach ($age as $x => $xValue) {
				echo "Key: " . $x . ", value " . $xValue . "<br>";
			}

			krsort($age);
			foreach ($age as $x => $xValue) {
				echo "Key: " . $x . ", value " . $xValue . "<br>";
			}
		?>
	</body>
</html>
