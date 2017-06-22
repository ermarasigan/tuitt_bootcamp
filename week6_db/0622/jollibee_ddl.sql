CREATE TABLE jollibee (
	`id` int not null auto_increment,
    `img` VARCHAR(255) not null,
    `name` VARCHAR(255) not null,
    `price` DECIMAL(5, 2) not null,
    `description` VARCHAR(255) not null,
    `category` VARCHAR(255) not null,
    `drink` VARCHAR(255) not null,
    primary key(id)
);


INSERT INTO jollibee (`img`,`name`,`price`,`description`,`category`,`drink`) VALUES ('<img src="img/jollibee/chicken_spagh_drink.png"></img>','Chicken Spaghetti w/ drink',126.5,'<br>Crispylicious,spicy, juicylicious Chickenjoy paired with the tastiest and meatiest Jollibee Spaghetti. Two favorites in one meal!','Chicken','With drink');
INSERT INTO jollibee (`img`,`name`,`price`,`description`,`category`,`drink`) VALUES ('<img src="img/jollibee/chicken_spagh.png" style="width:143px"></img>','Chicken Spaghetti (solo)',108.9,'<br>Crispylicious,spicy, juicylicious Chickenjoy paired with the tastiest and meatiest Jollibee Spaghetti. Two favorites in one meal!','Chicken','No drink');
INSERT INTO jollibee (`img`,`name`,`price`,`description`,`category`,`drink`) VALUES ('<img src="img/jollibee/chicken_supermeal.png"></img>','Chickenjoy Super Meal',137.5,'<br>Enjoy the crispylicious, juicylicious Chickenjoy served with half Jolly Spaghetti, Shanghai Rolls, Rice, and Regular Drink.','Chicken','With drink');
INSERT INTO jollibee (`img`,`name`,`price`,`description`,`category`,`drink`) VALUES ('<img src="img/jollibee/burger.png"></img>','Yum Burger w/drink',50.6,'<br>Your favorite Yum patty topped with our special burger dressing, served on a soft bun.','Burger','With drink');
INSERT INTO jollibee (`img`,`name`,`price`,`description`,`category`,`drink`) VALUES ('<img src="img/jollibee/burger.png"></img>','Yum Burger',33,'<br>Your favorite Yum patty topped with our special burger dressing, served on a soft bun.','Burger','No drink');
INSERT INTO jollibee (`img`,`name`,`price`,`description`,`category`,`drink`) VALUES ('<img src="img/jollibee/garlic_pepper.png"></img>','Garlic Pepper Beef',66,'<br>Juicy beef strips, topped with flavorful pepper sauce and garlic bits. Served with steamed rice..','Pepper Beef','No drink');
