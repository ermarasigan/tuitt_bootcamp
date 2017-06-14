<?php 
	// echo "Username: ";
	// echo $_POST['username'];
	// echo "<br>";
	// echo "Password: " . $_POST['password'];
	
	session_start();

	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	if(authenticate($username,$password)){
		echo 'User is valid';

		$_SESSION['username'] = $username;

	}else{
		echo 'Incorrect login details';
		// $_SESSION['username'] = $username;
	}

	function authenticate($username,$password){
		if($username == 'admin' && $password == 'secret'){
			return true;
		}else{
			return false;
		}
	}


	

	echo "<br>user: " . $_SESSION['username'];

	echo "<form action='index.php'>";
	echo "<button>Back</button>";
	echo "</form>";
?>