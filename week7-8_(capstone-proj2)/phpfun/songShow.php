<?php

  // Only one json file for all visitors searches
  // For each logged in user, one json file each for searches
  function searchShow(){

    $array = [];

    if(isset($_SESSION['username'])){
      $filename = "json/searches/" . htmlspecialchars(strtolower($_SESSION['username'])) . "_search.json";
    } else {
      $filename = "json/searches/search.json";
    }

    fopen($filename,'a');
    $string = file_get_contents($filename);

    if($string != null) {
      $array = json_decode($string, true);
    } 

    // Call function to display columns
    columnDisplay($array,'search-column');
  }

  // Get picks per user that is not logically deleted
  function userpickShow(){

    global $conn;
    $array = [];

    $userid = $_SESSION['userid'];
    $sql = "SELECT songid FROM picks 
            WHERE deleted is null
            AND userid = $userid 
            ";

    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)) {
        extract($row);
        array_push($array, $songid);
      }
    }

    // Call function to display columns
    columnDisplay($array,'userpick-column');
  }

  // Get top picks for all users
  function allpickShow(){

    global $conn;
    $array = [];

    $sql = "SELECT songid, count(songid) FROM picks 
            WHERE deleted is null
            GROUP BY songid
            ORDER BY count(songid) DESC LIMIT 10
            ";

    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)) {
        extract($row);
        array_push($array, $songid);
      }
    }

    // Call function to display columns
    columnDisplay($array,'allpick-column');
  }


  // Get details, and format and display column
  function columnDisplay($array,$scrollclass){

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
        if(mysqli_num_rows($result) > 0){
          $picked='yes';
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
          echo
            "<div class='$colwidth song-column $scrollclass'>

              <h4> $title </h4>
              <h5> $artist </h5>
              <h5> ($year) </h5>
            
              <div class='center pickbox'";
          if($_SESSION['role']=='admin'){
            echo "id='$key' onclick='songUpdate(this.id);' 
                  title='Click box to update song' ";
          }
          echo ">";

          if($picked=='yes'){
            echo "
                <button id='$key' class='btn btn-md btn-default' onclick='songUnpick(this.id);'>
                  <span class='glyphicon glyphicon-star'></span>
                </button>";
          } else {
            echo "
                <button id='$key' class='btn btn-md btn-default' onclick='songPick(this.id);'>
                  <span class='glyphicon glyphicon-star-empty'></span>
                </button>";
          }

          echo "
                <button id='$key' class='btn btn-md btn-default' onclick='songPlay(this.id);'>
                <span class='glyphicon glyphicon-play'></span>
                </button>";             

          if($_SESSION['role']=='admin'){
            echo "
                <button id='$key' class='btn btn-md btn-default' onclick='songDelete(this.id);'>
                  <span class='glyphicon glyphicon-trash'></span>
                </button>";
          }

          echo "
              </div>
            </div>";
        }
      } 
    }
  }
?>