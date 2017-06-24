<?php

  $delete_status = '';

	if(isset($_POST['delete'])){

    $string = file_get_contents('json/users.json');
    if($string)
      $users = json_decode($string, true);

    // Call function to check if password is valid
    $delpswd = $_POST['delpswd'];
    if (check_pswd($delpswd,$users)) {
      echo '<script>console.log("yey")</script>';

      // Call function to update json file
      delete_acct($delpswd,$users);
    } else {
      $delete_status = 'pswd_invalid';
    }

    echo '<script type="text/javascript">
              var update_status="";
              var delete_status="delete_msg";
              document.getElementById("#update_modal").showModal();
            </script>';
  }

  function delete_acct($password,$array) {
    global $delete_status;

    $username = $_SESSION['username'];
    $groupcode = $_SESSION['groupcode'];

    $index;

    foreach($array as $key => $value) {
      if($value['groupcode'] == $groupcode 
        && $value['username'] == $username 
        && $value['password'] == $password) {
        $index=$key;
      }
    }

    unset ($array[$index]);

    $fp = fopen('json/users.json','w');
    fwrite($fp, json_encode($array, JSON_PRETTY_PRINT));
    fclose($fp);

    session_unset();
    session_destroy();
    header('location:index.php');
    $delete_status = 'delete_success';

  }
?>