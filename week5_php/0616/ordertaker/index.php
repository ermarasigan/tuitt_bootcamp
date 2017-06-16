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
				<input type="text" name="username"> <br>
			Password: 
				<input type="password" name="password"> <br> 

			Choose: 
				<select name='choose'>
					<option value="jollibee">Jollibee</option>
					<option value="mcdonalds">Mcdo</option>
				</select> 

				<input type="submit" name="login" value="Log In">
					<?php require_once "partials/_login.php" ?>
			
				<br><br>Not a member yet?
				<input type="submit" name="register" value="Register">
					<?php require_once "partials/_register.php" ?>
			
		</form>
	</div>

</body>
</html>