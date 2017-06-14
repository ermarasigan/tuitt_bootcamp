<?php

	// name => value
	// echo $_POST['submit'];

	if (isset($_POST['submit'])){ //if submitted
		// echo 'true';

		$length = $_POST['length'];
		$width = $_POST['width'];

		if ($length < 0) {
			$length = 0;
		}

		if ($width < 0) {
			$width = 0;
		}

		echo "Length ". $length . "<br>";
		echo "Width " . $width . "<br>";

		function find_area($l,$w) {
			return "Area of rectangle is " . $l * $w;
		}

	}else{
		echo 'false';
	}

		
	echo "<div style='background-color:salmon;width:";
	echo $width . "px;height:";
	echo $length . "px;'>";
	
	echo "</div>";

	echo find_area($length,$width);

	

	echo "<form action='index.php'>";
	echo "<button>Back</button>";
	echo "</form>";




?>