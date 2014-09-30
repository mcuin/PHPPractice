<!DOCTYPE html>
<?php
	$expire = time()+60*60;
	setcookie("user", "Alex Porter", $expire);
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Cookies</title>
	</head>
	<body>
		<?php
			echo $_COOKIE["user"] . "<br>";
			print_r ($_COOKIE) . "<br>";

			if (isset($_COOKIE["user"])) {
				echo "Welcome " . $_COOKIE["user"] . "!<br>";
			} else {
				echo "Welcome guest!<br>";
			}
		?>
	</body>
</html>
