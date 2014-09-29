<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>File Operations</title>
	</head>
	<body>
		<?php
			$myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
			echo fread($myFile, filesize("webdictionary.txt"));
			while (!feof($myFile)) {
				echo fgets($myFile);
				echo getc($myFile);
			}
			fclose($myFile);
		?>
	</body>
</html>
