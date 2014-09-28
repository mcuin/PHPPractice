<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Data Types in PHP</title>
	</head>
	<body>
		<?php
			$x = "Hello World";
			echo "$x<br>";
			$x = 'Hello World';
			echo "$x<br>";
			
			$x = 5985;
			var_dump($x);
			echo "<br>";
			$x = -345;
			var_dump($x);
			echo "<br>";
			$x = 0x8C;
			var_dump($x);
			echo "<br>";
			$x = 047;
			var_dump($x);
			echo "<br>";

			$x = 10.365;
			var_dump($x);
			echo "<br>";
			$x = 2.4e3;
			var_dump($x);
			echo "<br>";
			$x = 8E-5;
			var_dump($x);
			echo "<br>";

			$x = true;
			echo "$x<br>";
			$y = false;
			echo "$y<br>";

			$cars = array("Volvo", "BMW", "Toyota");
			var_dump($cars);
			echo "<br>";

			class Car{
				var $color;
				function Car($color = "green"){
					$this->color = $color;
				}
				function whatColor() {
					return $this->color;
				}
			}

			$x = null;
			var_dump($x);
		?>
	</body>
<html>			
