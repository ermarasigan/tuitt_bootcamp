<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercise</title>
</head>
<body>
	

	<form action="get_area.php" method="POST">
		Length:<br>
			<!-- index comes from name -->
			<input type="number" name="length" value=0> <br>
		Width:<br>
			<input type="number" name="width"  value=0> <br> <br>
			<input type="submit" name="submit" value="Solve for Area">
	</form>

	<?php
		echo phpinfo();
	?>


</body>
</html>