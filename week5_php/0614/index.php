<!DOCTYPE html>
<html>
<head>
	<title>Getpost Sample</title>
</head>
<body>
	
	<!-- add ?input1=hello in address bar -->
	<?php
		// echo "Input: ";
		// echo $_GET['input1'];
		// echo "<hr>";
		// echo "Hello " . $_GET['name'];
	?>

	<!-- <form action="get_example.php" method="GET">
		Input1:<br>
			<input type="text" name="input1"> <br>
		Name:<br>
			<input type="text" name="name"> <br> <br>
			<input type="submit" value="Submit">
	</form> -->

<!-- 	<form action="post_example.php" method="POST">
		Input1:<br>
			<input type="text" name="input1"> <br>
		Name:<br>
			<input type="text" name="name"> <br> <br>
			<input type="submit" value="Submit">
	</form> -->

	<form action="session_home.php" method="POST">
		Username:<br>
			<!-- index comes from name -->
			<input type="text" name="username"> <br>
		Password:<br>
			<input type="password" name="password"> <br> <br>
			<input type="submit" value="Submit">
	</form>


</body>
</html>