<?php

	if(isset($_POST['register'])){

		require("../../mysqli/connection.php");

	  	$username = $_POST['username'];
	    $password = $_POST['password'];
	    $pw2 = $_POST['pw2'];
	

		if($password == $pw2
			&& $username > ''
			&& $password > '') {

			// encrypt password
			$password = sha1($password);
			// $password = password_hash($password, PASSWORD_DEFAULT);
			
			$sql = "INSERT INTO users (
				username, password, role)
				VALUES
				('$username','$password','regular')";
				mysqli_query($conn,$sql);
				echo "Registered successfully";
		} else {
			echo "Passwords did not match";
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head -->

	<title>Register</title>
	<!-- Bootstrap -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
	<h1> REGISTER </h1>

	<form method='post' action=''>
		<div class="form-group">
			<input type="text" name="username" placeholder="Username">
		</div>
		<div class="form-group">
			<input type="password" name="password" placeholder="Password">
		</div>
		<div class="form-group">
			<input type="password" name="pw2" placeholder="Confirm Password">
		</div>
		<div class="form-group">
          <button type="submit" name="register"  class="btn btn-success">
            Register
          </button>
        </div>
	</form>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../bootstrap/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>  


</body>
</html>