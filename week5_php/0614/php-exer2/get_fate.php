<!-- Logic for FLAMES Compatibility  -->
<?php

	if (isset($_POST['submit'])){ 

		$name1 = $_POST['name1'];
		$name2 = $_POST['name2'];

		// echo "Name 1: " . $name1 . "<br>";
		// echo "Name 2: " . $name2 . "<br>";
		

		function find_fate($a,$b) {

			$flames=['Soulmates'
					,'Friends'
					,'Lovers'
					,'Anger'
					,'Marriage'
					,'Enemies'];

			$total_len = strlen($a) + strlen($b);
			// return "total length is " . $total_len;
			$match_cnt = 0;

			$a_split = str_split($a);
			$b_split = str_split($b);

			// print_r($name1_array);
			// print_r($name2_array);

			for($i=0; $i<strlen($a); $i++){
				// subtract from count if matched
				$has_match = 'false';
				for($j=0; $j<strlen($b); $j++){
					if(strtolower($a_split[$i]) == 
					   strtolower($b_split[$j])) {
						$has_match = 'true';
					}
				}
				// to exclude special chars from count
				if(ctype_alpha($a_split[$i])==false) {
					$has_match = 'true';
				}
				if ($has_match == 'true'){
					$match_cnt++;
					// echo $match_cnt . ") " . ($a[$i]) . "<br>";
				}
				echo "<div style='font-size:100px; display:inline;";
				if ($has_match == 'true') {
					echo "text-decoration: line-through;";
					echo "color:black;";
				} else {
					echo "color:green;";
				}
				echo "'>";
				echo $a_split[$i];
				echo "</div>";
			}
			echo "<br>";

			echo "<div style='font-size:100px;'>";
					echo "+";
			echo "</div>";

			for($x=0; $x<strlen($b); $x++){
				// subtract from count if matched
				$has_match = 'false';
				for($y=0; $y<strlen($a); $y++){
					if(strtolower($b_split[$x]) == 
					   strtolower($a_split[$y])) {
						$has_match = 'true';
					} 
				}
				// to exclude special chars from count
				if(ctype_alpha($b_split[$x])==false) {
					$has_match = 'true';
				}
				if ($has_match == 'true'){
					$match_cnt++;
					// echo $match_cnt . ") " . ($b[$x]) . "<br>";
				}
				echo "<div style='font-size:100px; display:inline;";
				if ($has_match == 'true') {
					echo "text-decoration: line-through;";
					echo "color:black;";
				} else {
					echo "color:green;";
				}
				echo "'>";
				echo $b_split[$x];
				echo "</div>";
			}
			echo "<br>";
			echo "<div style='font-size:100px;'>";
					echo "=";
			echo "</div>";

			$count=$total_len - $match_cnt;
			// return "count is " . $count;

			$result = $flames[$count%6];

			echo "<div style='font-size: 100px; color: ";
				switch ($result) {
					case 'Soulmates':
						echo "salmon";
						break;
					
					case 'Friends':
						echo "blue";
						break;
					
					case 'Lovers':
						echo "pink";
						break;
					
					case 'Anger':
						echo "red";
						break;
					
					case 'Marriage':
						echo "fuchsia";
						break;
					
					case 'Enemies':
						echo "brown";
						break;

					default:
						break;
				}
			echo "'>" . $result;
			echo "</div>";

			return;
		}

		echo find_fate($name1,$name2);

		// foreach ($name1_array as $n1) {
		// 	foreach ($name1_array as $n1) {
		// 		if($n1 == $n2){
		// 			$count++;
		// 		}
		// 	}
		// }		

	}else{
		// echo 'false';
	}

	// Back Button
	echo "<form action='index.php'>";
	echo "<button style='width: 300px; height: 100px; font-size: 70px'>Back</button>";
	echo "</form>";

?>