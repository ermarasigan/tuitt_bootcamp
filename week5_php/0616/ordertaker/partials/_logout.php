<?php
	if(isset($_POST['logout'])){
		echo $_SESSION['username'] . " is logged out successfully";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
		session_unset();
		session_destroy();
		header('location:index.php');
	}
?>