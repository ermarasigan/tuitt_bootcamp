<!-- Logic for FLAMES Compatibility  -->
<?php

	if (isset($_POST['submit'])){ 

		$birthdate = $_POST['birthdate'];

		$int_year = intval(substr($birthdate,0,4)); 
		$int_day = intval(substr($birthdate,8,2));
		$int_month = intval(substr($birthdate,5,2));

		// echo "birth year: "   . $int_year  . "<br>";
		// echo "birth day: "    . $int_day   . "<br>";
		// echo "birth month: "  . $int_month . "<br>";

		$months=['null'
				,'January'
				,'February'
				,'March'
				,'April'
				,'May'
				,'June'
				,'July'
				,'August'
				,'September'
				,'October'
				,'November'
				,'December'];

		// echo "birth month: " . $months[$int_month];

		echo "You were born on: ";
		echo $months[$int_month] . " " . $int_day . ', ' . $int_year;
		echo "<br><br>";

		$eval = $int_month*100 + $int_day;

		echo "Zodiac is ";

		if ($eval>=321 && $eval<=420) {
			echo "Aries";
		}
		if ($eval>=421 && $eval<=520) {
			echo "Taurus";
		}
		if ($eval>=521 && $eval<=621) {
			echo "Gemini";
		}
		if ($eval>=622 && $eval<=722) {
			echo "Cancer";
		}
		if ($eval>=723 && $eval<=823) {
			echo "Leo";
		}
		if ($eval>=824 && $eval<=923) {
			echo "Virgo";
		}
		if ($eval>=924 && $eval<=1023) {
			echo "Libra";
		}
		if ($eval>=1024 && $eval<=1122) {
			echo "Scorpio";
		}
		if ($eval>=1123 && $eval<=1221) {
			echo "Sagitarrius";
		}
		if ($eval>=1222 || $eval<=120) {
			echo "Capricorn";
		}
		if ($eval>=121 && $eval<=218) {
			echo "Aquarius";
		}
		if ($eval>=219 && $eval<=320) {
			echo "Pisces";
		}


		

	}else{
		echo 'false';
	}

	// Back Button
	echo "<form action='index.php'>";
	echo "<button>Back</button>";
	echo "</form>";

?>