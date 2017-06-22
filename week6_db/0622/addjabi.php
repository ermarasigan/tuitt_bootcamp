<?php

	session_start();

	if(isset($_POST['login'])){
		require "../../mysqli/connection.php";

	  	$username = $_POST['username'];
	    $password = sha1($_POST['password']);

	     $sql = "SELECT * FROM users 
				WHERE username = '$username'
				  AND password = '$password'
				";

		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				
				extract($row);
				$_SESSION['message'] = "Login Successfull";
				$_SESSION['username'] = $username;
		    	$_SESSION['role'] = $role;
		    	// header('location:home.php');
		    	echo "log in successful";
	    	}
		} else {
			echo "not found";
		}
	}

	require "../../mysqli/connection.php";
	$sql = "SELECT * FROM jollibee
				";

		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				extract($row);
		    	// echo "rows fetched";
		    	echo "<div class='itembox clear'>";
		    	echo $img . '<br>';
		    	echo $name . '<br>';
		    	echo $price . '<br>';
		    	echo $description . '<br>';
		    	echo $category . '<br>';
		    	echo $drink . '<br>';
		    	echo "</div>";
	    	}
		} else {
			echo "not found";
		}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head -->

	<title>Log in</title>
	<!-- Bootstrap -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	.itembox{
			background: rgba(255,97,29,0.5);
			/*background:#ff611d;
			opacity: 0.5;*/
			width: 300px;
			text-align: center;
			color: white;
			padding: 10px;
			margin: 10px;
			box-sizing: content-box;
			/*font-family: cursive;*/
			font-family: poppinsregular;
			font-size: 1.2em;
			float: left;
			border-radius: 10px;
			display: inline-block;
			height: 360px;
			/*height: auto;*/
		}

    </style>


</head>
<body>
	<h1> LOG IN </h1>

	<form method='post' action=''>
		<div class="form-group">
			<input type="text" name="username" placeholder="Username">
		</div>
		<div class="form-group">
			<input type="password" name="password" placeholder="Password">
		</div>
		<div class="form-group">
          <button type="submit" name="login"  class="btn btn-success">
            Log in
          </button>
        </div>
	</form>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../bootstrap/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>  


</body>
</html>