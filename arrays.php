<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Arrays</title>
	</head>
	<body>
		<?php
			$cars = array("Volvo", "BMW", "Toyota");
			echo "I like " . $cars[0] . ", " . $cars[1] . ", and " . $cars[2] . ".<br>";
			echo count($cars) . "<br>";
			
			$length = count($cars);
			for ($i = 0; $i <= $length; $i++) {
				echo $cars[$i];
				echo "<br>";
			}

			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
			$age2['Peter']="35";
			$age2['Ben']="37";
			$age2['Joe']="43";

			echo "Peter is " . $age['Peter'] . " years old.<br>";

			foreach ($age as $x => $xValue) {
				echo "Key: " . $x . ", value = " . $xValue . "<br>";
			} 
		?>
	</body>
</html>
