<?php

	session_start();
	require_once "../phpfun/connectDB.php";

	$title 	= $_POST['title'];
	$artist	= $_POST['artist'];
	$year  	= $_POST['year'];
	$bpm   	= $_POST['bpm'];
	$chords	= $_POST['chords'];
	$lyrics	= $_POST['lyrics'];
	$songid = $_POST['songid'];


	// Prepared statements
    $stmt=mysqli_stmt_init($conn);

    $sql = "UPDATE songs 
            SET  title = ?
            	,artist = ?
            	,year = ?
            	,bpm = ?
            WHERE id = ?";

    if(mysqli_stmt_prepare($stmt,$sql)){
    	mysqli_stmt_bind_param($stmt,'sssii',$title,$artist,$year,$bpm,$songid);
    	mysqli_stmt_execute($stmt);

    	echo "success";

    	if(sizeof($chords)>0 && sizeof($lyrics)>0) {

    		// Write to json file (Chords)
	    	$filename = "../json/songs/song" . $songid . "_chords.json";

		    $fp = fopen($filename,'w');
		    fwrite($fp, json_encode($chords,JSON_PRETTY_PRINT));
		    fclose($fp);

		    // Write to json file (Lyrics)
	    	$filename = "../json/songs/song" . $songid . "_lyrics.json";

		    $fp = fopen($filename,'w');
		    fwrite($fp, json_encode($lyrics,JSON_PRETTY_PRINT));
		    fclose($fp);
		}

    	mysqli_stmt_close($stmt);
    }
?>