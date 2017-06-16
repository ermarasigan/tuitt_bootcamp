<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>The Ordertaker</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body>

	<div id="welcome">

		<h1>Welcome to Ordertaker</h1>

		<form action="" method="POST">
			
			Username:
				<input type="text" name="reguser"> <br>
			Password: 
				<input type="password" name="regpswd1"> <br>
			Confirm: 
				<input type="password" name="regpswd2"> <br>

			<br>Not a member yet?
			<input type="submit" name="create" value="Create Account">
				<?php require_once "partials/_create.php" ?>
			<br>
			

		</form>

	</div>

</body>
</html>