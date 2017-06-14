<!DOCTYPE html>
<html>
<head>
	<title>PHP Activity</title>

	<!-- Bootstrap -->
    <link href="../project_hobbit/css/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">
		#ul2, #ul3 {
			display: inline;
		}
		table {
			border: 2px solid #777;
			border-collapse: collapse;
			padding: 5px;
		}
	</style>
</head>
<body>
	<?php
		$names1=array("Harry","Ronald","Hermione","Luna","Neville");
		$names2=array("Potter","Weasley","Granger","Lovegood","Longbottom");
		$names3=array("김신","웅애","찌은닥","김순","덱후");
	?>

	<ul id='ul1'>
		<li>
			<?php echo $names1[0]; ?>
		</li>
		<li>
			<?php echo $names1[1]; ?>
		</li>
		<li>
			<?php echo $names1[2]; ?>
		</li>
		<li>
			<?php echo $names1[3]; ?>
		</li>
		<li>
			<?php echo $names1[4]; ?>
		</li>
	</ul>

	<?php 
	echo
		"<ul id='ul2'>
			<li>
				".$names2[0]."
			</li>
			<li>
				".$names2[1]."
			</li>
			<li>
				".$names2[2]."
			</li>
			<li>
				".$names2[3]."
			</li>
			<li>
				".$names2[4]."
			</li>
		</ul>"
	?>

	<?php 
		echo "<ul id='ul3'>";
		for ($i=0; $i<5; $i++) {
			echo "<li>" .$names3[$i]. "</li>";
			}
		echo "</ul>";
	?>

	<hr>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<table class='table table-hover' contenteditable='true'>
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Korean Name</th>
					</tr>
					<?php 
					for($i=0;$i<count($names1);$i++) {
						echo "<tr>
								  <td>" .$names1[$i]. 
								"</td>
								  <td>" .$names2[$i]. 
								"</td>
								  <td>" .$names3[$i].
								"</td>
							  </tr>";
					}
					?>
				</table>
			</div>
		</div>
	</div>

	<?php
		$string = "the quick brown fox jumps over the lazy dog.";

		echo strtoupper($string)."<br>";
		echo strtolower($string)."<br>";
		echo ucfirst($string)."<br>";
		echo ucwords($string)."<br>";

		echo strpos($string, 'fox')."<br>";
		echo strrev($string)."<br>";

		echo "<hr>";

		$word = "Dennis sinned";
		$reversed = strrev($word);
		
		if (strtolower($word) == strtolower($reversed)) {
			echo "'$word' is a palindrome";
		} else {
			echo "'$word' is not a palindrome";
		}

		echo "<hr>";

		echo strtoupper( substr($string, strpos($string, 'brown')));

		$string2 = "the lazy brown fox.";

		// echo substr($string2,strpos($string2,'the'),strpos($string2,'brown')).
		// 	"quick ".
		// 	substr($string2,strpos($string2,'brown'),strlen('brown fox.'));

		echo substr($string2,0,strpos($string2,'brown')).
			"quick ".
			substr($string2,strpos($string2,'brown'));

		echo "<hr>";

		$a = 4;
		$b = 3;

		echo "hypothenuse is ". sqrt(pow($a,2)+ pow($b,2));

		echo "<hr>";

		echo "A = ". $a. "<br>";
		echo "B = ". $b. "<br>";
		echo "A + B = ". ($a+$b). "<br>";
		// echo "A + B = $a+$b <br>";
		echo "A - B = ". ($a-$b). "<br>";
		echo "A * B = ". $a*$b. "<br>";
		// echo "A / B = ". number_format($a/$b,2). "<br>";
		echo "A / B = ". round($a/$b,2). "<br>";
		echo "A % B = ". $a%$b. "<br>";
		// echo "++B = ".++$b."<br>";
		// echo "--A = ".--$a."<br>";

		$letter = 'aa';
		echo ++$letter;


		echo "<hr>";

		$c = $a;
		$a = $b;
		$b = $c;

		echo "a=".$a."<br>";
		echo "b=".$b."<br>";

		echo "<hr>";

		$d = 55;
		$e = 57;

		$d = $d + $e;
		$e = $d - $e;
		$d = $d - $e;

		echo "d=".$d."<br>";
		echo "e=".$e."<br>";

		echo "<hr>";

		$numbers = array(93,90,88,95);

		echo "average is ". ($numbers[0]+$numbers[1]+$numbers[2]+$numbers[3])/count($numbers) ."<br>";

		echo "average is ". array_sum($numbers)/count($numbers)."<br>" ;

		echo "<hr>";

		$f = 536;

		if($f%2 == 0) {
			echo "$f is even";
		}
		else {
			echo "$f is odd";
		}

		echo "<hr>";

		$g = 11;

		if($g%2 == 0 AND $g%3 == 0) {
			echo "$g is an even multiple of 3";
		}
		elseif($g%2 != 0 AND $g%3 == 0) {
			echo "$g is odd multiple of 3";
		}else {
			echo "$g is not a multiple of 3";
		}

		echo "<hr>";

		// echo date("l");

		$day = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

		$input = 31;

		// if($input%7==0)	{
		// 	echo $day[7]."<br>";
		// } else{
		// 	echo $day[$input%7]."<br>";
		// }

		echo $day[$input%7];

		// if($input == "1" OR "2" OR "3" OR "4" OR "5" OR "6" OR "7") {
		// 	echo $day[$input]."<br>";
		// } else {
		// 	echo "invalid input"."<br>";
		// }

		// switch ($input) {
		// 	case '1':
		// 		echo $day[$input];
		// 		break;
		// 	case '2':
		// 		echo $day[$input];
		// 		break;
		// 	case '3':
		// 		echo $day[$input];
		// 		break;
		// 	case '4':
		// 		echo $day[$input];
		// 		break;
		// 	case '5':
		// 		echo $day[$input];
		// 		break;
		// 	case '6':
		// 		echo $day[$input];
		// 		break;
		// 	case '7':
		// 		echo $day[$input];
		// 		break;
		// 	default:
		// 		break;
		// }





	?>

</body>
</html>