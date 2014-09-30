<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Upload PHP</title>
	</head>
	<body>
		<?php
			/*if ($_FILES["file"]["error"] > 0) {
				echo "Error: " . $_FILES["file"]["error"] . "<br>";
			} else {
				echo "Upload: " . $_FILES["file"]["name"] . "<br>";
				echo "Type: " . $_FILES["file"]["type"] . "<br>";
				echo "Size: " . ($_FILES["file"]["size"] / 1024) . "kB<br>";
				echo "Stored in: " . $_FILES["file"]["tmp_name"];
			}*/

			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);

			if ((($_FILES["name"]["type"] == "image/gif") || ($_FILES["name"]["type"] == "image/jpg") || ($_FILES["name"]["type"] == "image/jpeg") || 				($_FILES["name"]["type"] == "image/pjpeg") || ($_FILES["name"]["type"] == "image/x-png") || ($_FILES["name"]["type"] == "image/png")) 				&& ($_FILES["name"]["size"] < 20000) && in_array($extension, $allowedExts)) {
				if ($_FILES["file"]["error"] > 0) {
					echo "Error: " . $_FILES["file"]["error"] . "<br>";
				} else {
					echo "Upload: " . $_FILES["file"]["name"] . "<br>";
					echo "Type: " . $_FILES["file"]["type"] . "<br>";
					echo "Size: " . ($_FILES["file"]["size"] / 1024) . "kB<br>";
					echo "Stored in: " . $_FILES["file"]["tmp_name"];
				}
			} else {
				echo "Invalid file. <br>";
			}		  
		?>
	</body>
</html>
