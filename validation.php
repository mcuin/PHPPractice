<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Form Validation</title>
	</head>
	<body>
		<from method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		Name: <input type="text" name="name"><br>
		Email: <input type="email" name="email"><br>
		Website: <input type="url" name="website"><br>
		Comments: <textarea name="comments" row="5" cols="40"></textarea><br>
		
		Gender:<br>
		<input type="radio" name="gender" value="female">Female<br>
		<input type="radio" name="gender" value="male">Male<br>

		<input type="submit" value="Submit"><br>
	
		<?php
			$name = $email= $website = $comments = $gender = "";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$name = testInput($_POST["name"]);
				$email = testInput($_POST["email"]);
				$website = testInput($_POST["website"]);
				$comments = testInput($_POST["comments"]);
				$gender = testInput($_POST["gender"]);
			}

			function testInput($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>
	</body>
</html>
