<?php
	$jollibee=[
		['img' => '<img src="img/jollibee/chicken_spagh_drink.png"></img>'
		,'name' => 'Chicken Spaghetti w/ drink'
		,'price' => 126.5
		,'description' => '<br>Crispylicious,spicy, juicylicious Chickenjoy paired with the tastiest and meatiest Jollibee Spaghetti. Two favorites in one meal!'
		,'CATEGORY' => 'Chicken'
		,'DRINK' => 'With drink'
		]
		,
		['img' => '<img src="img/jollibee/chicken_spagh.png" style="width:143px"></img>'
		,'name' => 'Chicken Spaghetti (solo)'
		,'price' => 108.9
		,'description' => '<br>Crispylicious,spicy, juicylicious Chickenjoy paired with the tastiest and meatiest Jollibee Spaghetti. Two favorites in one meal!'
		,'CATEGORY' => 'Chicken'
		,'DRINK' => 'No drink'
		]
		,
		['img' => '<img src="img/jollibee/chicken_supermeal.png"></img>'
		,'name' => 'Chickenjoy Super Meal'
		,'price' => 137.5
		,'description' => '<br>Enjoy the crispylicious, juicylicious Chickenjoy served with half Jolly Spaghetti, Shanghai Rolls, Rice, and Regular Drink.'
		,'CATEGORY' => 'Chicken'
		,'DRINK' => 'With drink'
		]
		,
		['img' => '<img src="img/jollibee/burger.png"></img>'
		,'name' => 'Yum Burger w/drink'
		,'price' => 50.6
		,'description' => '<br>Your favorite Yum patty topped with our special burger dressing, served on a soft bun.'
		,'CATEGORY' => 'Burger'
		,'DRINK' => 'With drink'
		]
		,
		['img' => '<img src="img/jollibee/burger.png"></img>'
		,'name' => 'Yum Burger'
		,'price' => 33.0
		,'description' => '<br>Your favorite Yum patty topped with our special burger dressing, served on a soft bun.'
		,'CATEGORY' => 'Burger'
		,'DRINK' => 'No drink'
		]
		,
		['img' => '<img src="img/jollibee/garlic_pepper.png"></img>'
		,'name' => 'Garlic Pepper Beef'
		,'price' => 66.0
		,'description' => '<br>Juicy beef strips, topped with flavorful pepper sauce and garlic bits. Served with steamed rice..'
		,'CATEGORY' => 'Pepper Beef'
		,'DRINK' => 'No drink'
		]
	];

	$filename = 'json/jollibee.json';

	// Check if file exists
	fopen($filename,'a');
	$string = file_get_contents($filename);

	if($string != null) {
			$array = json_decode($string, true);
	} else {
		$fp = fopen($filename,'w');
		fwrite($fp, json_encode($jollibee,JSON_PRETTY_PRINT));
		fclose($fp);
	}

?>