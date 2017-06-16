<?php
	// $users = [
	// 	['username' => 'admin', 'password' => 'secret']
	//    ,['username' => 'peejay', 'password' => 'password']
	//    ,['username' => 'emman', 'password' => 'master']
	//    ,['username' => 'ruel', 'password' => 'lafuenter']
	// ];

	// Do this once to create the *.json file
	// $fp = fopen('json/users.json','w');
	// fwrite($fp, json_encode($users,JSON_PRETTY_PRINT));
	// fclose($fp);

	// Retrieving data from *.json file
	$string = file_get_contents('json/users.json');
	$users = json_decode($string, true);


	if(isset($_POST['login'])){

		$username = htmlspecialchars($_POST['username']);
		$password = htmlspecialchars($_POST['password']);
		$choose = ($_POST['choose']);

		function authenticate($username,$password){
			global $users;
			foreach($users as $user) {
				if($username == $user['username'] && 
				   $password == $user['password']) {
					return true;
				}
			}
		}

		if(authenticate($username,$password)){
			echo 'User is valid';
			$_SESSION['username'] = $username;
			$_SESSION['choose'] = $choose;
			header('location:menu.php');
		}else{
			echo '<span style="color:red">';
			echo '<br>Incorrect login details';
			echo '</span>';
		}	
	}

?>