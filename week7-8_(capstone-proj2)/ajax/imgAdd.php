
<?php

	session_start();
	require_once "../phpfun/connectDB.php";

	$songid = $_SESSION['addid'];

	// Storing source path of the file in a variable
	$sourcepath = $_FILES['file']['tmp_name'];
	// Target path where file is to be stored      
	$targetpath = "../img/songs/song". $songid . "_pic.jpg";
	// Moving Uploaded file
	move_uploaded_file($sourcepath,$targetpath);

?>