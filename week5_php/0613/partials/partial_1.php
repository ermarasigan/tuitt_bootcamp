<?php

	if (isset($_POST['counter'])) {
		$counter = $_POST['counter'] + 1;
	} else {
		// Submit button is not yet clicked
		$counter = 1;
	}

	// Retrieving player counter
	// $current_player = $_GET['counter'];

	// Data
	$names= ["Durant" 	=> 35
			,"James"	=> 23
			,"Curry" 	=> 30
			,"Irving"	=> 2
			,"Davis"	=> 23
		];

	echo "counter: " . $counter . "<br>";

	// <!-- output -->
	// foreach ($names as $key => $value) {
	// 	if (value == $current_player) {
	// 		echo $key . " " . $value;
	// 	}
	// }

?>