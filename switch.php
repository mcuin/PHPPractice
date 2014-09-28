<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Switch</title>
	</head>
	<body>
		<?php 
			$favColor = "blue";
			
			switch ($favColor) {
				case "red": 
					echo "Your favorite color is red!<br>";
					break;
				case "blue":
					echo "Your favorite color is blue!<br>";
					break;
				case "green":
					echo "Your favorite color is green!<br>";
					break;
				default:
					echo "Your favorites color isn't red, blue or green.<br>";
					break;
			}
		?>
	</body>
</html>
					
