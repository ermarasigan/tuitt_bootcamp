<!DOCTYPE html>
<html>
<head>
	<title>PHP Sample</title>
</head>
<body>

	<?php echo "Hello World!"; ?>

	<?php
		echo "Today is ". date("l") . ". ";
	?>

	Here's the latest news. 안넁,엠만음니다.

	<hr>

	<?php
		$name='엠만';
		echo "안넁 $name";
		echo "<br>";
		echo '안넁 $name';
	?>

	<hr>

	<?php 
		echo 'Buzz Lightyear once said: "You\'re a toy!"';
		echo "<br>";
		echo "안넁 'Hello's World' 안넁";
		echo "<br>";

		$x = "hello";
		$y = " world";
		$x .= $y; //$x = $x . $y
		echo "$x";

		echo "<br>";
		$month = "March";
		if ($month == "March") echo "It's springtime";

		$a = "1000";
		$b = "+1000";
		// if ($a = $b) echo "0";
		if ($a == $b) echo "1";
		if ($a === $b) echo "2";

		echo "<hr>";
		if(1 != 2) {
			echo "true";
		}
		else {
			echo "false";
		}
	?>

</body>
</html>