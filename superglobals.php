<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Super Globals</title>
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			Name: <input type="text" name="fname">
			<input type="submit">
		</form>
		<?php
			echo $_SERVER['PHP_SELF'] . "<br>";
			echo $_SERVER['SERVER_NAME'] . "<br>";
			echo $_SERVER['HTTP_HOST'] . "<br>";
			echo $_SERVER['HTTP_REFERER'] . "<br>";
			echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
			echo $_SERVER['SCRIPT_NAME'] . "<br>";
			$name = $_REQUEST['fname'];
			echo $name . "<br>";
			$name2 = $_POST['fname'];
			echo $name2 . "<br>";
		?>
	</body>
</html>
