<?php
	
	session_start();
	require_once "../phpfun/connectDB.php";

	$playid = $_POST['playid'];
	$playlyrics=[];

	// Get details from json
	$filename = "../json/songs/song" . $playid . "_lyrics.json";

	if(is_file($filename)) {
		fopen($filename,'r');
		$string = file_get_contents($filename);
		$playlyrics = json_decode($string, true);
	} 	

	echo json_encode($playlyrics);
?>