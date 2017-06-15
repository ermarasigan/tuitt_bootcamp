<?php

	// if(isset($_POST['submit'])){
	// 	$gender = $_POST['gender'];
	// 	echo "selected gender is: ". $gender . "<br>";

	// }

	if(isset($_POST['submit'])){
		$country = $_POST['country'];
			echo "selected country is: ". $country . "<br>";
		}

	function create_dropdown($name,$options) {
		// $country = $_POST['country'];
		global $country;
		// echo "<select name='".$name."'>";
		// for($i=0; $i<count($options); $i++){
		// 	echo "<option value='" . $options[$i][0] . "' "; 
		// 	if ($country==$options[$i][0]){
		// 		echo "selected";
		// 	}
		// 	echo ">";
		// 	echo $options[$i][1] . "</option>";
		// }
		// echo "</select>";
		// $output = '';
		$output='';
		$output .= "<select name='".$name."'>";
		for($i=0; $i<count($options); $i++){
			$output .= "<option value='" . $options[$i][0] . "' "; 
			if ($country==$options[$i][0]){
				$output .= "selected";
				}
			$output .= ">";
			$output .= $options[$i][1] . "</option>";
			}
		$output .= "</select>";

		return $output;

	}
	
	
?>

<?php require_once "_capitals.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Select</title>
</head>
<body>

	<h1> Sample Select Box </h1>
	<form method="POST" action ="">
		Capital
		<!-- <select name='gender'>
			<option>Girl</option>
			<option>Boy</option>
			<option>Butiki</option>
			<option>Baboy</option>
		</select> -->
		<!-- <select name='gender'>
			<option value="male">M</option>
			<option value="female">F</option>
		</select> -->

		
		<?php 
			create_dropdown('country',$capitals);
			echo create_dropdown('country',$capitals);
		?>

		<input type="submit" name="submit" value="Submit">

		<?php 
			echo "<br><br>";
			
		?>
		
	</form>








</body>
</html>