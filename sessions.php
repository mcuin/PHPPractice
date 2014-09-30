<!DOCTYPE html>
<?php 
	session_start();
	if (isset($_SESSION['views'])) {
		$_SESSION['views'] = $_SESSION['views'] + 1;
	} else {
		$_SESSION['views'] = 1;
	}
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Sessions</title>
	</head>
	<body>
		<?php
			echo "Pageviews = " . $_SESSION['views'];
		?>
	</body>
</html> 
