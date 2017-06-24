<?php

	function show($items) {

		echo "<div id='menu'>";
		echo '<form method="POST" action ="">';
		echo create_dropdown($items,'CATEGORY');
		echo create_dropdown($items,'DRINK');
		
		echo '<button id="submit_btn" class="btn btn-success"';
		echo 'type="submit" name="submit">Submit';
		echo '</button>';
		// echo '<input ';
		// echo 'type="submit" name="submit" value="Submit">';

		echo '</form>';

		if(isset($_POST['submit']) or isset($_POST['addtocart'])){

			if(isset($_POST['submit'])) {
				$drink = $_POST['DRINK'];
				$category = $_POST['CATEGORY'];
				$_SESSION['DRINK'] = $drink;
				$_SESSION['CATEGORY'] = $category;
			} else {
				$drink = $_SESSION['DRINK'];
				$category = $_SESSION['CATEGORY'];
			}

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
		} 
			else {

			for($i=0; $i<count($items); $i++) {
				display($items[$i]);
			}
		}

		echo "</div>";
	}

	function display($arr){
		echo "<div class='itembox clear'>";
		foreach ($arr as $key => $value) {
			if ($key != 'CATEGORY' &&
				$key != 'DRINK') {
				echo($value) . "<br>";
			}
		}
		echo '<form method="POST" action ="">';
		echo '<button id="submit_btn" class="btn btn-danger"';
		echo 'type="submit" name="addtocart">Add to Cart';
		echo '</button>';
		echo '</form>';
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

