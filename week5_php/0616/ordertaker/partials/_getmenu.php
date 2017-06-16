<?php

	function show($items) {

		if(isset($_POST['submit'])){
			$drink = $_POST['DRINK'];
			$category = $_POST['CATEGORY'];

			// echo "<h1>";
			// echo "<br>Category: " . $category . "<br>";
			// echo "Drink Option: " . $drink . "<br>";
			// echo "</h1>";

			echo "<div id='menu'>";
			for($i=0; $i<count($items); $i++) {
				if ($drink=='all' && $category=='all') {
					display($items[$i]);
				} 
				else if ($drink=='all') {
					if ($items[$i]['CATEGORY'] == $category) {
					display($items[$i]);
					}
				} else if ($category=='all') {
					if ($items[$i]['DRINK'] == $drink) {
						display($items[$i]);
					}
				} else {
					if ($items[$i]['DRINK'] == $drink &&
						$items[$i]['CATEGORY'] == $category) {
						display($items[$i]);
					}
				}				
			}
			echo "</div>";
		}
	}

	function display($arr){
		echo "<div class='itembox clear'>";
		foreach ($arr as $key => $value) {
			if ($key != 'CATEGORY' &&
				$key != 'DRINK') {
				echo($value) . "<br>";
			}
		}
		echo "</div>";
	}

	function create_dropdown($items,$name) {
		// global $items;
		$output='';

		$options=array_unique(array_column($items,$name));
		// var_dump($options);

		$output .= "<select name='".$name."'>";
		$output .= "<option value='all'>";
		$output .= $name . "</option>";

		foreach ($options as $option) {
			$output .= "<option value='";
			$output .= $option . "' "; 
			if(isset($_POST['submit'])){
				if ($_POST[$name]==$option){
					$output .= "selected";
				}
			}
			$output .= ">";
			$output .= $option . "</option>";
		}
		$output .= "</select>";

		return $output;
	}
	
?>

