<?php
	if(isset($_POST['logout'])){
		// echo $_SESSION['username'] . " is logged out successfully";
		session_unset();
		// echo $_SESSION['username'] . " is logged out successfully";
		session_destroy();
		header('location:index.php');
	}
?>
<?php
	if(isset($_POST['home'])){
		// header('location:index.php',true, 301);
		session_unset();
		session_destroy();
		header('location:index.php');
	}
?>
<?php
	if(isset($_POST['close'])){
		// header('location:index.php',true, 301);
		session_unset();
		session_destroy();
		header('location:index.php');
	}
?>