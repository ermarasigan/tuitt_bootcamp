<?php
require_once 'partials/partial_1.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>12 Days of Xmas</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

</head>
<body>

	<div class="container">

		<?php

			// echo "<ul class='list-group'>";
			// foreach ($names as $name => $jersey_num) {
			// 	echo "<li class='list-group-item'>";
			// 	echo $name . " #" . $jersey_num . "<br>";
			// 	echo "</li>";
			// }
			// echo "</ul>";

		?>
	</div>

	<!-- Passing data to server -->
	<form method="POST">

		<!-- Submit data to server -->
		<input class="btn btn-success" type="submit" name="nextDay" value="Next Day">

		<!-- Pass value of counter -->
		<input type="hidden" name="counter" 
				value="<?php echo $counter; ?>">
	</form>

<!-- 	<div class="well">
		<form method="POST">
			<input class="btn btn-success" type="submit" name="nextDay" value="Start">
			<input type="hidden" name="player" value="<?php echo $player; ?>">
		</form>
	</div> -->






	<?php
		$ords=array('null'
			,'first'
			,'second'
			,'third'
			,'fourth'
			,'fifth'
			,'sixth'
			,'seventh'
			,'eight'
			,'ninth'
			,'tenth'
			,'eleventh'
			,'twelfth'
			);

		$gifts=array('null'
			,'a partridge in a pear tree'
			,'Two Turtle Doves'
			,'Three French Hens'
			,'Four Calling Birds'
			,'Five Gold Rings'
			,'Six Geese a-Laying'
			,'Seven Swans a-Swimming'
			,'Eight Maids a-Milking'
			,'Nine Ladies Dancing'
			,'Ten Lords a-Leaping'
			,'Eleven Pipers Piping'
			,'Twelve Drummers Drumming'
			);


		// for($i=1; $i<=12; $i++){
		$i=$counter;
			echo "<br> On the " . $ords[$i];
			echo " day of Christmas, <br>";
			echo "my true love sent to me: <br>";
			for ($j=$i; $j>0; $j--){
				
				if($i>1 && $j==1){
					echo "and " . $gifts[$j] . "<br>" ;
				} else {
					echo $gifts[$j] . "<br>" ;
				}
			}
		// }

		// echo "<ul>";
		// foreach ($ords as $name) {
		// 	if ($name == 'first') {
		// 		echo "<li>" . $name . "</li>";
		// 	} else {
		// 		echo "<li>" . "This is not a name" . "</li>";
		// 	}
		// }
		// echo "</ul>";

		// $names= ["Durant" 	=> 35
		// 		,"James"	=> 23
		// 		,"Curry" 	=> 30
		// 		,"Irving"	=> 2
		// 		,"Davis"	=> 23
		// 	];

		// echo "<ul class='list-group'>";
		// foreach ($names as $name => $jersey_num) {
		// 	echo "<li class='list-group-item'>";
		// 	echo $name . " #" . $jersey_num . "<br>";
		// 	echo "</li>";
		// }
		// echo "</ul>";

		// $player = 35;

		//include "partial_1.php"; //Warning error
		//require "partial_1.php"; //Fatal error
		//require_once "partial_1.php"; //Workaround
	?>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>

</body>
</html>