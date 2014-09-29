<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Multidimensional Arrays</title>
	</head>
	<body>
		<?php 
			$cars = array(array("Volvo", 22, 18), array("BMW", 15, 13), array("Saab", 5, 2), array("Land Rover", 17, 15));
			
			echo $cars[0][0] . "In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . "<br>";
			echo $cars[1][0] . "In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . "<br>";
			echo $cars[2][0] . "In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . "<br>"; 
			echo $cars[3][0] . "In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . "<br>"; 

			for ($rows = 0; $rows < 4; $rows++) {
				echo "<p><b>Row number $rows</b></p>";
				echo "<ul>";
				for ($col = 0; $col < 3; $col++) {
					echo "<li>".$cars[$rows][$col]."</li>";
				}
			echo "</ul>";
			}
		?>
	</body>
</html>
