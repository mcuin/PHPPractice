<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Require</title>
	</head>
	<body>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			Name: <input type="text" name="name">
			<span class="error">* <?php echo $nameErr; ?></span>
			<br>
			Email: <input type="email" name="email">
			<span class="error">* <?php echo $emailErr; ?></span>
			<br>
			Website: <input type="url" name="website">
			<span class="error"><?php echo $webErr; ?></span>
			<br>
			Comment: <textarea name="comment" rows="5" cols="40"></textarea>
			<br>
			Gender:
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="male">Male
			<span class="error">* <?php echo $genderErr; ?></span>
			<br>
			<input type="submit" name="submit" value="submt">
		</form>
	
		<?php
			$name = $email = $website = $comment = $gender = "";
			$nameErr = $emailErr = $webErr = $genderErr = "";

			function testInput($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = specialhtmlchars($data);
			}

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["name"])) {
					$nameErr = "Name is required.";
				} else {
					$name = testInput($_POST["name"]);
				}
				
				if (empty($_POST["email"])) {
					$emailErr = "Email is required.";
				} else {
					$email = testInput($_POST["email"]);
				}

				if (empty($_POST["website"])) {
					$webErr = "";
				} else {
					$website = testInput($_POST["website"]);
				}

				if (empty($_POST["comment"])) {
					$comment = "";
				} else {
					$comment = testInput($_POST["comment"]);
				}

				if (empty($_POST["gender"])) {
					$genderErr = "Gender is required.";
				} else {
					$gender = testInput($_POST["gender"]);
				}
			}
		?>
	</body>
</html>

