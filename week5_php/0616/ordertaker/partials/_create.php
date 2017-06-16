<?php

	$string = file_get_contents('json/users.json');
	$usercreds = json_decode($string, true);
	$usernames = array_unique(array_column($usercreds,'username'));

	if(isset($_POST['create'])){
		echo add_acct($usercreds);
	}

	if(isset($_POST['back'])){
		header('location:index.php');
	}

	function add_acct($database){

		$reguser = $_POST['reguser'];
		$regpswd1 = $_POST['regpswd1'];
		$regpswd2 = $_POST['regpswd2'];
		$output = '';

		// Empty array
		$new_user = [];

		// Check if supplied username is blank
		if ($reguser == ''){
			$output .= "<span style='color:red'>";
			$output .= "<br>Username is required";
			$output .= "</span>";
			return $output;
		}

		// Check if account is already existing
		if (exists($reguser)){
			$output .= "<span style='color:red'>";
			$output .= "<br>Account already exists";
			$output .= "</span>";
			return $output;
		}

		// Check if supplied password is blank
		if ($regpswd1 == ''){
			$output .= "<span style='color:red'>";
			$output .= "<br>Password is required";
			$output .= "</span>";
			return $output;
		}

		// Check if supplied password is secure
		if (strlen($regpswd1) < 8) {
			$output .= "<span style='color:red'>";
			$output .= "<br>Passwords should have at least 8 chars";
			$output .= "</span>";
			return $output;
		}

		// Check if supplied passwords are same
		if ($regpswd1!=$regpswd2) {
			$output .= "<span style='color:red'>";
			$output .= "<br>Passwords should be the same";
			$output .= "</span>";
			return $output;
		}

		// Add data to JSON
		$new_user['username'] = $reguser;
		$new_user['password'] = $regpswd1;

		// Add items to array;
		// $usercreds[] = $new_user;
		array_push($database, $new_user);

		// PHP array to JSON array
		$fp = fopen('json/users.json','w');
		fwrite($fp, json_encode($database, JSON_PRETTY_PRINT));
		fclose($fp);

		$output .= '<span style="color:green">';
		$output .= "<br>Account successfully created ";
		$output .= "<input type='submit' name='back' value='Back'>";

		return $output;

	}

	function exists($checkuser){
		global $usernames;

		foreach ($usernames as $username) {
			if ($username == $checkuser){
				return true;
			}
		}
	}
?>