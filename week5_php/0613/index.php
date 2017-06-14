<?php
	
	if (isset($_POST['counter'])) {
		$counter = $_POST['counter'] + 1;
	} else {
		// Submit button is not yet clicked
		$counter = 0;
	}


	if ($counter > 13) {
		$counter = 0;
	}

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
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Javascript Exercise</title>
	<link rel="stylesheet" type="text/css" 
	href="css/stylesheet.css">

	<style type="text/css">
		#section12 #twelve-text{
			color: red;
			text-shadow:
    		/*-1px -1px 0 #fff*/
    		/*,1px -1px 0 #fff*/
    		/*,-1px 1px 0 #fff*/
    		2px 2px 0 #fff
    		;
    	}
	</style>

</head>
<body>
	<main id="snow">

		<!-- (Game) Twelve Days of Christmas -->
		<div id='section12' class='center'>
			
			<h1 id="twelve-text"> 
				Twelve Days of Christmas! 
			</h1>

			<p id="twelve-lyrics" class="white">
				<?php
					$i=$counter;

					if ($i>0 && $i<=12) {
						echo "<span>";
						echo "<br> On the ";

						echo "<strong><em>";
						echo $ords[$i];
						echo "</em></strong>";

						echo " day of Christmas, <br>";
						echo "my true love sent to me: <br>";
						echo "</span>";
						for ($j=$i; $j>0; $j--){
							
							if($i>1 && $j==1){
								echo "<span>";
								echo "and " . $gifts[$j] . "<br>" ;
								echo "</span>";
							} else {
								if ($j==$i) {
									echo "<span style='color:salmon'>";
									echo $gifts[$j] . "<br>" ;
									echo "</span>";
								} else {
									echo "<span>";
									echo $gifts[$j] . "<br>" ;
									echo "</span>";
								}
							}
						}
					}

					if ($i > 12) {
						echo "<span>";
						echo "Thank you, thank you ambabait ninyo!";
						echo "<br> Thank you!";
						echo "</span>";
					}

				?>
			</p>
		</div>
	</main>

	<form method="POST">

		<!-- Submit data to server -->
		<button id="twelve-start" type="submit" name="submit" class="lowerright">
			<?php 
				if ($counter==0){
					echo "Start";
				} else if ($counter<=12) {
					echo "Next";
				} else {
					echo "Restart";
				}
			?>
		</button>

		<!-- Pass value of counter -->
		<input type="hidden" name="counter" 
				value="<?php echo $counter; ?>">
	</form>

<!-- 	<script type="text/javascript">
		function O(f) {
			return document.getElementById(f)
		}

		O('twelve-start').addEventListener("click",twelvedays);

		function twelvedays() {
			O('twelve-lyrics').style.display="block";
		}

	</script> -->

	<!-- Javascript source -->
	<!-- <script src="../jsexer/js/javascript.js"></script> -->

</body>
</html>