<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Creatr and Write to Files</title>
	</head>
	<body>
		<?php
			$myFile = fopen("testFile.txt", "w") or die("Unable to create file.");
			$txt = "John Doe\n";
			fwrite("testFile.txt", $txt);
			$txt = "Jane Doe\n";
			fwrite("testFile.txt", $txt);
			fclose($myFile);

			$myFile = fopen("testFile.txt", "w") or die("Unable to create file.");
			$txt = "Mickey Mouse\n";
			fwrite("testFile.txt", $txt);
			$txt = "Minnie Mouse\n";
			fwrite("testFile.txt", $txt);
			fclose($myFile);
		?>
	</body>
</html>
						
