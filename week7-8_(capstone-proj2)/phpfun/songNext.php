<?php

  // Get picks per user that is not logically deleted
  function songNext(){

    global $conn;
    $array = [];
    $currentsong = $_GET['id'];

    $userid = $_SESSION['userid'];
    $sql = "SELECT songid FROM picks 
            WHERE deleted is null
            AND userid = $userid
            AND songid is not null
            AND songid <> $currentsong
            order by rand()
            ";

    $result = mysqli_query($conn,$sql);
    if($result) {
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)) {
          extract($row);
          array_push($array, $songid);
        }
        // Call function to display columns
        nextsongDisplay($array);
      }
    }
  }

  // Get details, and format and display column
  function nextsongDisplay($array){

    $col_cnt = 0;

    foreach ($array as $key) {
      global $conn;

      // Determine if song is already picked
      $picked='';
      if(isset($_SESSION['userid'])){
        $userid = $_SESSION['userid'];
        $sql = "SELECT * FROM picks 
            WHERE songid = $key
            AND userid = $userid
            AND deleted is null
            ";
        $result = mysqli_query($conn,$sql);
        if($result){
          if(mysqli_num_rows($result) > 0) {
            $picked='yes';
          }
        }
      }

      // Get song details
      $sql = "SELECT title, artist, year, bpm FROM songs 
              WHERE id = '$key'
              ";

      $result = mysqli_query($conn,$sql);

      if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          extract($row);

          // Compute for bootstrap column width
          $col_cnt += 1;

          $colwidth = '';
          if ($col_cnt<=(sizeof($array)-sizeof($array)%4)) {
            $colwidth = "col-lg-3";

          } else {

            switch (sizeof($array)%4) {
            case 0:
              $colwidth = "col-lg-3";
              break;

            case 1:
              $colwidth = "col-lg-12";
              break;

            case 2:
              $colwidth = "col-lg-6";
              break;

            case 3:
              $colwidth = "col-lg-4";
              break;
            
            default:
              $colwidth = "col-lg-12";
              break;
            }
          } 

          if ($col_cnt<=(sizeof($array)-sizeof($array)%2)) {
            $colwidth .= " col-md-6";

          } else {
            $colwidth .= " col-md-12";
          } 
          
          // Generate the song box
          nextsongBox($colwidth,$key,$title,$artist,$year,$bpm,$picked);
        }
      } 
    }
  }

  // Function to generate the song box
  function nextsongBox($colwidth,$key,$title,$artist,$year,$bpm,$picked) {
    echo
    "<div class='$colwidth song-column'>

      <h4> $title </h4>
      <h5> $artist </h5>
      <h5> ($year) </h5>
    
      <div class='center pickbox' ";

      $songpic = "img/songs/song". $key . "_pic.jpg"; 
      if(is_file($songpic)) {
        echo "style='
              background: url($songpic) no-repeat; 
              background-size: cover;
              background-position: center;
              '";
      }
      echo ">
      </div>";

      echo "
            <button id='$key' title='Play Song'  class='btn btn-md btn-default' onclick='songPlay(this.id);'>
            <span class='glyphicon glyphicon-play'></span>
            </button>";     
      
    echo "</div>";
  }
?>