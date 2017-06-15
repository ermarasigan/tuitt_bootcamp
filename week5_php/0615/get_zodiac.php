<?php


	if (isset($_POST['submit'])){ 

		$name = $_POST['name'];
		$birthdate = $_POST['birthdate'];

		$int_year = intval(substr($birthdate,0,4)); 
		$int_day = intval(substr($birthdate,8,2));
		$int_month = intval(substr($birthdate,5,2));


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

		echo "<br><br>";
		echo "Hi ". $name . ", ";
		echo "you were born on: <br>";
		echo $months[$int_month] . " " . $int_day . ', ' . $int_year;
		echo "<br><br>";

		$eval = $int_month*100 + $int_day;
		echo "Your zodiac sign is ";

			   if ($eval>=121 && $eval<=218) {
			echo "Aquarius &#9810";
		} else if ($eval>=219 && $eval<=320) {
			echo "Pisces &#9811";
		} else if ($eval>=321 && $eval<=420) {
			echo "Aries &#9800";
		} else if ($eval>=421 && $eval<=520) {
			echo "Taurus &#9801";
		} else if ($eval>=521 && $eval<=621) {
			echo "Gemini &#9802";
		} else if ($eval>=622 && $eval<=722) {
			echo "Cancer &#9803";
		} else if ($eval>=723 && $eval<=823) {
			echo "Leo &#9804";
		} else if ($eval>=824 && $eval<=923) {
			echo "Virgo &#9805";
		} else if ($eval>=924 && $eval<=1023) {
			echo "Libra &#9806";
		} else if ($eval>=1024 && $eval<=1122) {
			echo "Scorpio &#9807";
		} else if ($eval>=1123 && $eval<=1221) {
			echo "Sagitarrius &#9808";
		} else {
			echo "Capricorn &#9809";
		}

		echo "<br>";

		$rand1=rand(0,255);
		$rand2=rand(0,255);
		$rand3=rand(0,255);
		echo "Your lucky color is ";
		echo "<div style='width:20px; height: 20px;";
		echo "background-color: rgb(";
		echo $rand1 . "," . $rand2 . "," . $rand3 . ")";
		echo "; display:inline-block; border-radius: 50%'>";
		echo "</div>";
		echo " rgb (";
		echo $rand1 . "," . $rand2 . "," . $rand3 . ")";

		echo "<br><br>";
		$chinese=['Monkey 猴'
				 ,'Rooster 鸡'
				 ,'Dog 狗'
				 ,'Pig 猪'
				 ,'Rat 鼠'
				 ,'Ox 牛'
				 ,'Tiger 虎'
				 ,'Rabbit 兔'
				 ,'Dragon 龙'
				 ,'Snake 蛇'
				 ,'Horse 马'
				 ,'Goat 羊'
				 ];

		echo "You were born under the year of the ";
		echo $chinese[$int_year%12];

		echo "<br>";
		$traits=['Changeability without being constant leads to foolishness.'
				,'Being constant without changeability leads to woodenness.'
				,'Fidelity without amiability leads to rejection.'
				,'Amiability without fidelity leads to immorality.'
				,'Wisdom without industriousness leads to triviality.'
				,'Industriousness without wisdom leads to futility.'
				,'Valor without caution leads to recklessness.'
				,'Caution without valor leads to cowardice.'
				,'Strength without flexibility leads to fracture.'
				,'Flexibility without strength leads to compromise.'
				,'Forging ahead without unity leads to abandonment.'
				,'Unity without forging ahead leads to stagnation.'
				];

		echo $traits[$int_year%12];

	}else{
		// echo 'false';
	}

?>