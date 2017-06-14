<!DOCTYPE html>
<html>
<head>
	<title>Getpost Sample</title>
</head>
<body>
	
	<!-- add ?input1=hello in address bar -->
	<?php
		// echo "Input: ";
		// echo $_GET['input1'];
		// echo "<hr>";
		// echo "Hello " . $_GET['name'];
	?>

	<!-- <form action="get_example.php" method="GET">
		Input1:<br>
			<input type="text" name="input1"> <br>
		Name:<br>
			<input type="text" name="name"> <br> <br>
			<input type="submit" value="Submit">
	</form> -->

<!-- 	<form action="post_example.php" method="POST">
		Input1:<br>
			<input type="text" name="input1"> <br>
		Name:<br>
			<input type="text" name="name"> <br> <br>
			<input type="submit" value="Submit">
	</form> -->

	<form action="session_home.php" method="POST">
		Username:<br>
			<!-- index comes from name -->
			<input type="text" name="username"> <br>
		Password:<br>
			<input type="password" name="password"> <br> <br>
			<input type="submit" value="Submit">
	</form>

	<form action="logout.php" method="POST">
		<button>Log out</button>
	</form>

	<?php

		echo "<br>";

		$lowered = strtolower("aNy # of Letters and Punctuations you WANT");
		echo $lowered;

		echo "<br>";

		$ucfixed = ucfirst(strtolower("aNy # of Letters and Punctuations you WANT"));
		echo $ucfixed; 

		echo "<br><br>";

		echo fix_names("WILLIAM","henry","gatES");

		function fix_names($n1,$n2,$n3) {
			$n1 = ucfirst(strtolower($n1));
			$n2 = ucfirst(strtolower($n2));
			$n3 = ucfirst(strtolower($n3));
			return $n1 . " " . $n2 . " " . $n3;
			// return array ($n1, $n2, $n3);
		}


		echo "<br><br>";

		$grades=[91,90,75,80];

		function get_ave($array) {
			// $ave = array_sum($array) / count($array);
			// echo $ave;
			return "average of is " . array_sum($array) / count($array);
		}

		// $average[]=get_ave($grades);
		// echo $average[0];

		// array_push($average[],get_ave($grades));

		// $average[]=get_ave($grades);
		// echo get_ave($grades);


		// RETURNING ARRAYS


		// RETURNING GLOBAL VARIABLES
		$a1 = "WILLIAM";
		$a2 = "henry";
		$a3 = "gatES";

		echo "<br>" . $a1 . " " . $a2 . " " . $a3;
		fix_name2();
		echo "<br>" . $a1 . " " . $a2 . " " . $a3;

		function fix_name2() {
			global $a1; $a1 = ucfirst(strtolower($a1));
			global $a2; $a2 = ucfirst(strtolower($a2));
			global $a3; $a3 = ucfirst(strtolower($a3));
		}

	?>




</body>
</html>