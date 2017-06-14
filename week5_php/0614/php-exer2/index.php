<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercise 2</title>
	<style type="text/css">
/*		form {
			font-size: 100px;
		}
		form input {
			height: 50px;
			width: 200px;
			font-size: 50px;
			color: salmon;
		}
*/
	</style>
</head>
<body>
	
	<h1>F.L.A.M.E.S.</h1>
	<form action="get_fate.php" method="POST">
		Name 1:<br>
			<input type="text" name="name1"> <br>
		Name 2:<br>
			<input type="text" name="name2"> <br> <br>

			<input type="submit" name="submit" value="FLAMES">
	</form>

	<h1>Horoscope</h1>
	<form action="get_horoscope.php" method="POST">
		Birthdate:<br>
			<input type="date" name="birthdate"> <br> <br>

			<input type="submit" name="submit" value="HOROSCOPE">
	</form>




	<?php 
		// require_once "get_fate.php";
	?>

</body>
</html>