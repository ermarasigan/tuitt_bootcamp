<?php

  session_start();
  require_once "../phpfun/connectDB.php";

  $deleteid = $_GET['id'];

  $sql = "DELETE FROM picks
          WHERE songid = $deleteid
          ";

  $result = mysqli_query($conn,$sql);
    
  $sql = "DELETE FROM songs
          WHERE id = $deleteid
          ";

  $result = mysqli_query($conn,$sql);
  if($result) {
    if(mysqli_affected_rows($conn) > 0) {

      // Delete photo
      $filename = "../img/songs/song". $deleteid . "_pic.jpg";

      if(is_file($filename)) {
        unlink($filename);
      }

      // Delete chord file
      $filename = "../json/songs/song" . $deleteid . "_chords.json";
  
      if(is_file($filename)) {
        unlink($filename);
      }

      // Delete lyric file
      $filename = "../json/songs/song" . $deleteid . "_lyrics.json";
      
      if(is_file($filename)) {
        unlink($filename);
      }

      // Delete song in user search
      $filename = "../json/searches/" . htmlspecialchars(strtolower($_SESSION['username'])) . "_search.json";

      if(is_file($filename)) {
        $fp = fopen($filename,'r');
        $string = file_get_contents($filename);
        $searcharray = json_decode($string, true);
        
        foreach ($searcharray as $key => $value) {
          if($value==$deleteid){
            $saveid = $key;
          }
        }

        if(isset($saveid)){
          unset($searcharray[$saveid]);
          $fp = fopen($filename,'w');
          fwrite($fp, json_encode($searcharray,JSON_PRETTY_PRINT));
          fclose($fp);
        }
      }

      echo "success";
    } else {
      echo "No song deleted";
    }
  } else {
    echo "Delete Failed";
  }
?>