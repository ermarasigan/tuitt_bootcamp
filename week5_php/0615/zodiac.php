<!DOCTYPE html>
<html>
<head>
	<title>Zodiac (PHP Exer 3)</title>
</head>
<body>

	<h1>Horoscope</h1>
	<form method="POST">
		Name:<br>
			<input type="text" name="name"> <br>
		Birthdate:<br>
			<input type="date" name="birthdate"> <br> <br>

			<input type="submit" name="submit" value="HOROSCOPE">
	</form>

	<?php require_once "get_zodiac.php" ?>

</body>
</html>