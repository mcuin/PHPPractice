<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Operators</title>
	</head>
	<body>
		<?php		
			$x = 6;
			$y = 10;

			echo $x + $y;
			echo "<br>"; 
			echo $x - $y;
			echo "<br>";
			echo $x * $y;
			echo "<br>";
			echo $x / $y;
			echo "<br>";
			echo $x % $y;
			echo "<br>";
			
			$x = 10;
			echo $x;
			echo "<br>";
			$y = 20;
			$y += 100;
			echo $y;
			echo "<br>";
			$z = 50;
			$z -= 25;
			echo $z;
			echo "<br>";
			$i = 5;
			$i *= 6;
			echo $i;
			echo "<br>";
			$j = 10;
			$j /= 5;
			echo $j;
			echo "<br>";
			$k = 15;
			$k %= 4;
			echo $k;
			echo "<br>";

			$a = "Hello";
			$b = $a . " world!";
			echo $b;
			echo "<br>";

			$x = "Hello";
			$x .= " world!";
			echo $x;
			echo "<br>";
			
			$x = 10;
			echo $x++;
			echo "<br>";
			
			$y = 10;
			echo ++$y;
			echo "<br>";

			$z = 5;
			echo $z--;
			echo "<br>";
		
			$i = 5;
			echo --$i;
			echo "<br>";

			$x = 100;
			$y = 100;

			var_dump($x == $y);
			echo "<br>";
			var_dump($x === $y);
			echo "<br>";
			var_dump($x != $y);
			echo "<br>";
			var_dump($x !== $y);
			echo "<br>";

			$a = 50;
			$b = 90;
	
			var_dump(a > b);
			echo "<br>";
			var_dump(a < b);
			echo "<br>";

			$x = array("a" => "red", "b" => "green");
			$y = array("c" => "blue", "d" => "yellow");
			$z = $x + $y;
			var_dump($z);
			echo "<br>";
			var_dump($x == $y);
			echo "<br>";
			var_dump($x === $y);
			echo "<br>";
			var_dump($x != $y);
			echo "<br>";
			var_dump($x <> $y);
			echo "<br>";
			var_dump($x !== $y);
			echo "<br>";
		?>
	</body>
</html>
