<?php

	$items=[
		['img' => '<img src="images/chicken_spagh_drink.png"></img>'
		,'name' => 'Chicken Spaghetti w/ drink'
		,'price' => 126.5
		,'description' => '<br>Crispylicious,spicy, juicylicious Chickenjoy paired with the tastiest and meatiest Jollibee Spaghetti. Two favorites in one meal!'
		,'category' => 'chicken'
		,'drink' => 'yes'
		]
		,
		['img' => '<img src="images/chicken_spagh.png" style="width:143px"></img>'
		,'name' => 'Chicken Spaghetti (solo)'
		,'price' => 108.9
		,'description' => '<br>Crispylicious,spicy, juicylicious Chickenjoy paired with the tastiest and meatiest Jollibee Spaghetti. Two favorites in one meal!'
		,'category' => 'chicken'
		,'drink' => 'no'
		]
		,
		['img' => '<img src="images/chicken_supermeal.png"></img>'
		,'name' => 'Chickenjoy Super Meal'
		,'price' => 137.5
		,'description' => '<br>Enjoy the crispylicious, juicylicious Chickenjoy served with half Jolly Spaghetti, Shanghai Rolls, Rice, and Regular Drink.'
		,'category' => 'chicken'
		,'drink' => 'yes'
		]
		,
		['img' => '<img src="images/burger.png"></img>'
		,'name' => 'Yum Burger w/drink'
		,'price' => 50.6
		,'description' => '<br>Your favorite Yum patty topped with our special burger dressing, served on a soft bun.'
		,'category' => 'burger'
		,'drink' => 'yes'
		]
		,
		['img' => '<img src="images/burger.png"></img>'
		,'name' => 'Yum Burger'
		,'price' => 33.0
		,'description' => '<br>Your favorite Yum patty topped with our special burger dressing, served on a soft bun.'
		,'category' => 'burger'
		,'drink' => 'no'
		]
		,
		['img' => '<img src="images/garlic_pepper.png"></img>'
		,'name' => 'Garlic Pepper Beef'
		,'price' => 66.0
		,'description' => '<br>Juicy beef strips, topped with flavorful pepper sauce and garlic bits. Served with steamed rice..'
		,'category' => 'pepper beef'
		,'drink' => 'no'
		]
	];

	function show() {
		global $items;

		if(isset($_POST['submit'])){
		// if ($_POST['drink'] != null &&
		// 	$_POST['category'] != null) {
			$drink = $_POST['drink'];
			$category = $_POST['category'];
		// }

			echo "<h1>";
			echo "<br>Category: " . $category . " , ";
			echo "Drink Option: " . $drink . "<br>";
			echo "</h1>";

			echo "<div id='menu'>";
			for($i=0; $i<count($items); $i++) {
				if ($drink=='all' && $category=='all') {
					display($items[$i]);
				} 
				else if ($drink=='all') {
					if ($items[$i]['category'] == $category) {
					display($items[$i]);
					}
				} else if ($category=='all') {
					if ($items[$i]['drink'] == $drink) {
						display($items[$i]);
					}
				} else {
					if ($items[$i]['drink'] == $drink &&
						$items[$i]['category'] == $category) {
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
			if ($key != 'category' &&
				$key != 'drink') {
				echo($value) . "<br>";
			}
		}
		echo "</div>";
	}

	// $categories=[
	// 		 ["chicken","Chickenjoy"]
	// 		,["burger","Yum Burger"]
	// ];

	function create_dropdown($name) {
		global $items;
		$output='';

		$options=array_unique(array_column($items,$name));
		// var_dump($options);

		$output .= "<select name='".$name."'>";
		$output .= "<option value='all' selected>";
		$output .= $name . "</option>";

		foreach ($options as $option) {
			$output .= "<option value='";
			$output .= $option . "' "; 
			$output .= ">";
			$output .= $option . "</option>";
		}
		$output .= "</select>";

		return $output;
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercises 4</title>
	<style type="text/css">
		.itembox{
			background:orange;
			width: 300px;
			text-align: center;
			color: white;
			padding: 10px;
			margin: 10px;
			box-sizing: content-box;
			font-family: cursive;
			float: left;
			border-radius: 10px;
			display: inline-block;
			height: 330px;
		}
		main {
			position: relative;
		}
		#menu {
			position: absolute;
			left: 50%;
			transform: translateX(-50%);
			/*position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%,-50%);*/
			text-align: center;
			width: 680px;
		}
		form
		,main h1 {
			text-align: center;
		}
		#itembox {
			display: inline-block;
		}

		main h1 {
			color: red;
			font-family: sans-serif;
			margin: 0;
			padding: 0;
		}

		body {
			background-color: lightyellow;
		}

		.clear:after {
	      	content: "";
	      	display: block;
	      	clear: both;
        }


	</style>

</head>
<body>

	<form method="POST" action ="">
		<?php 
			echo create_dropdown('category');
			echo create_dropdown('drink');
		?>
		<!-- <select name='category'>
			<option selected value="all">Category</option>
			<option value="chicken">Chickenjoy</option>
			<option value="burger">Yum Burger</option>
		</select>
		<select name='drink'>
			<option selected value="all">Drink option</option>
			<option value="yes">With drink</option>
			<option value="no">NO drink</option>
		</select> -->
		<input type="submit" name="submit" value="Submit">
	</form>

	<main>
		<?php
			show();
		?>
	</main>

</body>
</html>