<!DOCTYPE html>
<html>
<head>
	<title>PHP Day 2</title>
</head>
<body>

	<div class="container">
	<?php
		if(isset($_GET['username'])){
			echo "hello " , $_GET['username'];
		}
	?>

	<form method="get" action="">
		username: <input type="text" name="username"><br>
		password: <input type="text" name="password"><br>
		<button>Submit</button>
	</form>


	<?php
		$us = "trump";
		$ph = "du30";

		if ($us = "trump" && $ph == "poe") {
			echo "true";
		} else {
			echo "false";
		}

		if ($us = "trump" AND $ph == "poe") {
			echo "true";
		} else {
			echo "false";
		}

		$bool = true && false;
		var_dump($bool);

		$bool = true AND false;
		var_dump($bool);


		echo "<hr>";

		$count=1;
		while($count <= 12) {
			echo "$count times 12 is " . $count*12 . "<br>";
			++$count;
		}

		$count=15;
		do {
			echo "$count times 12 is " . $count*12 . "<br>";
			++$count;
		} while($count <= 12);


		echo "<hr>";

		$day = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

		$count=1;
		while($count <= 28) {
			echo "$count " . $day[$count%7] . "<br>";
			++$count;
		}

		$count=29;
		do {
			echo "$count " . $day[$count%7] . "<br>";
			++$count;
		} while($count <= 28);

		for ($i=29; $i<=28; $i++) {
			echo "$i " . $day[$i%7] . "<br>";
			}

		echo "<hr>";

		$count=1;
		while($count <= 12) {
			echo "$count squared is " . pow($count,2) . "<br>";
			++$count;
		}

		echo "<hr>";
		$count=1;
		while($count <= 50) {
			if($count <= 15) {
				echo "$count times 2 is " . $count*2 . "<br>";
			}elseif($count <= 35) {
				echo "30 less $count divided by 2 is " . (30-$count)/2 . "<br>";
			}else{
				echo "$count plus 6 is " . ($count+6) . "<br>";
			}
			++$count;
		}

		echo "<hr>";

		echo "<h1> Factorial </h1>";
		echo "<table> <tr>";
			$operand=1;
			while ($operand <= 6) {
				$multiplier=$operand;
				echo "<td style='padding:20px;'>";
				echo "$operand factorial is: " . "<br>"; 
				$factorial=1;
				while($multiplier > 0) {
					$factorial *= $multiplier;
					if ($multiplier != 1) {
						echo $multiplier . " x ";
					} else {
						echo $multiplier . " = ";
					}
					--$multiplier;
				}
				echo $factorial . "<br>";
				echo "</td>";
				++$operand;
			}
		echo "</tr> </table>";


		echo "<hr>";

		echo "<h1> Factorial </h1>";
		echo "<table> <tr>";
			$factorial = 1;
			$count = 1;
			while ($count < 7) {
				// $factorial = $factorial * $count;
				$factorial *= $count;
				echo "<td style='padding:20px;'>";
				echo "Factorial of $count is $factorial" . "<br>";
				echo "</td>";
				++$count;
			}
		echo "</tr> </table>";

		echo "<hr>";

		echo "<h1> Factorial </h1>";
		echo "<table> <tr>";
			$factorial = 1;
			for($count = 1;$count < 7;$count++) {
				$factorial *= $count;
				echo "<td style='padding:20px;'>";
				echo "Factorial of $count is $factorial" . "<br>";
				echo "</td>";
			}
		echo "</tr> </table>";

		echo "<hr>";

		for($count=1;$count <= 12;++$count) {
			echo "$count squared is " . pow($count,2) . "<br>";
		}

		echo "<hr>";
		$odd_sum=0;
		$even_sum=0;

		for($count=1;$count <= 50;++$count) {
			if($count%2 == 0) {
				$even_sum += $count;
			} else {
				$odd_sum += $count;
			}
		}

		echo "sum of odd numbers is " . $odd_sum . "<br>";
		echo "sum of even numbers is " . $even_sum . "<br>";

		$min = 1;
		$max = 50;
		$odd_sum=0;
		$even_sum=0;
		// $odd_sum + $even_sum = ($min + $max) * ($max / 2);
		// $even_sum = ($max / 2) + $odd_sum
		$odd_sum = (($min + $max) * ($max / 2) - ($max / 2)) / 2;
		$even_sum = ($max / 2) + $odd_sum;
		echo "sum of odd numbers is " . $odd_sum . "<br>";
		echo "sum of even numbers is " . $even_sum . "<br>";


		echo "<hr>";

		$string = "The quick brown fox jumps over the lazy dog.";

		echo $string[4];
		echo strlen($string)."<br>";

		for($i=0;$i<strlen($string);$i++){
			if($i%2==0){
				echo str_replace('e', '3', strtolower($string[$i]));
			} else {
				echo str_replace('E', '3', strtoupper($string[$i]));
			}
			
		} 


		echo "<hr>";

		$string = "The quick brown fox";
		$vowel_count = 0;

		for ($i=0;$i<strlen($string);$i++) {
			$ch = strtolower($string[$i]);
			if ($ch == 'a' ||
				$ch == 'e' ||
				$ch == 'i' ||
				$ch == 'o' ||
				$ch == 'u') {
			 	$vowel_count += 1; 
			}
		}
		echo "number of vowels is: " . $vowel_count . "<br>";

		$vowel_count = 0;
		$consonant_count = 0;
		for ($i=0;$i<strlen($string);$i++) {
			if (in_array(
					strtolower($string[$i]), 
					['a','e','i','o','u'])
				){
				$vowel_count += 1; 
			} elseif (ctype_alpha($string[$i])) {
				$consonant_count += 1;
			}
		}
		echo "number of vowels is: " . $vowel_count . "<br>";
		echo "number of consonants is: " . $consonant_count . "<br>";


		echo "<hr>";

		for ($i=0; $i < 5; $i++) {
			for ($j=0; $j < 5; $j++) {
				echo "* ";
			}
			echo "<br>";
		}


		echo "<hr>";

		echo "<table>";
		for ($i=1; $i <= 8; $i++) {
			echo "<tr>";
			for ($j=1; $j <= 8; $j++) {
				if (($j+$i)%2==0){
					echo "<td style='width:40px;height:40px;
					vertical-align:center; text-align:center; 
					background: salmon'>";
				} else {
					echo "<td style='width:40px;height:40px;
					vertical-align:center; text-align:center; 
					background: lavender'>";
				}
				echo $i * $j;
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";


		echo "<hr>";

		echo "<h1> Fibonacci Sequence </h1>";
		$x = 0;
		$y = 1;
		for($i=1; $i<=8; $i++){
			echo $y . " ";
			$x += $y;
			echo $x . " "; 
			$y += $x; 
		}

			// echo $y." ";
			// $out = $x + $y;
			// $x=$y;
			// $y=$out;

		echo "<h1> Fibonacci Sequence </h1>";
		$x = 0;
		$y = 1;
		for($i=1; $i<=15; $i++){
			echo $y." ";
			$out = $x + $y;
			$x=$y;
			$y=$out;
			// $y = $y + $x;
			// $x = $y - $x;
			// $y = $y - $x;
		}


		echo "<hr>";
		echo "<h1> Pascals Triangle </h1>";
		$num = array(0,1,2,3,4,5,6,7,8);
		echo "<table>";
		for($i=1; $i<=8; $i++){
			echo "<tr>";
			for($j=1; $j<=$i; $j++){
				echo "<td style='padding: 10px'>";
				echo $num[$j]+$num[$j-1];
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";


		echo "<hr>";

		// $colors = array('red,'orange','yellow') <= indexed arrays
		$colors = ['red','orange','yellow','green'];
		echo $colors[1]; 

		// associative arrays
		$days = array(
			'January' => 31,
			'February' => 28,
			'April' => 30
		);

		echo "<ul>";
		for ($i=0; $i<count($colors); $i++) {
			echo "<li>".$colors[$i]."</li>";
		}
		echo "</ul>";

		echo $days['January'] . "<br>";

		$names = ['Billy','Peejay','Angeli'];
		$ages = [25, 26, 23];

		for ($i=0; $i < count($names); $i++) {
			echo $names[$i] . " is " . $ages[$i] . " years old. <br>";
		}

		$records = [
			'Billy' => ['username'=>'billy','password'=>'b!LLy'],
			'PeeJay' => ['username'=>'pj','password'=>'p33j4y']
		];

		echo $records['Billy']['username'];


		echo "<hr>";

		$records = [
			'Billy' => 26,
			'PeeJay' => 23
		];

		foreach ($records as $key => $value) {
			echo "key: " . $key . ", value: " . $value . "<br>";
		}

		$colors = ['red','orange','yellow','green'];

		// print_r($colors);
		// var_dump($colors);
		
		echo "<ul style='display:inline'>";
		foreach ($colors as $color) {
			echo "<li>" . $color . "</li>";
		}
		echo "</ul>";


		echo "<hr>";

		$records = [
			'Billy' => ['username'=>'billy','password'=>'b!LLy'],
			'PeeJay' => ['username'=>'pj','password'=>'p33j4y']
		];

		foreach ($records as $name => $creds) {
			echo $name . ":<br>";
			foreach ($creds as $key => $value) {
				echo $key . ": " . $value . "<br>";
			}
		}

		print_r($records);


	?>


	<hr>


</body>
</html>