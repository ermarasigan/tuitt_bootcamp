<?php
	session_start();

	echo $_SESSION['username'] . " is logged out successfully";
	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
	// undefine variables
	session_unset();

	echo "<br>after unset, username is " . $_SESSION['username'];

	// destroy session on refresh
	session_destroy();


	echo "<form action='index.php'>";
	echo "<button>Back</button>";
	echo "</form>";
?>