<?php

  $output = '';
  $signup_status = '';

  if(isset($_POST['signup'])){

    // Retrieving data from *.json file
    $string = file_get_contents('json/users.json');
    $usercreds = json_decode($string, true);
    $usernames = array_unique(array_column($usercreds,'username'));

    add_acct($usercreds);
    if ($output > '') {
      if ($signup_status != 'signup_success') {
        $signup_status = 'signup_error';
      }
      echo '<script type="text/javascript"> 
              var status="signup_msg";
              document.getElementById("#login_modal").showModal();
            </script>';
    }
  }

  function add_acct($database){
    global $output;
    global $signup_status;

    $regcode = strtoupper($_POST['regcode']);
    $reguser = $_POST['reguser'];
    $regpswd1 = $_POST['regpswd1'];
    $regpswd2 = $_POST['regpswd2'];

    // Empty array
    $new_user = [];

    // Check if supplied username is blank
    if ($regcode == ''){
      $output .= "Group Code is required";
      return $output;
    }

    if ($regcode != 'TUITT'){
      $output .= $regcode . " is not a valid Group Code";
      return $output;
    }

    // Check if supplied username is blank
    if ($reguser == ''){
      $output .= "Username is required";
      return $output;
    }

    // Check if account is already existing
    if (exists($reguser)){
      $output .= "Account already exists";
      return $output;
    }

    // Check if supplied password is blank
    if ($regpswd1 == ''){
      $output .= "Password is required";
      return $output;
    }

    // Check if supplied password is secure
    if (strlen($regpswd1) < 4) {
      $output .= "Passwords should have at least 4 chars";
      return $output;
    }

    // Check if supplied passwords are same
    if ($regpswd1!=$regpswd2) {
      $output .= "Passwords should be the same";
      return $output;
    }

    // Add data to JSON
    $new_user['groupcode'] = $regcode;
    $new_user['username'] = $reguser;
    $new_user['password'] = $regpswd1;

    // Add items to array;
    // $usercreds[] = $new_user;
    array_push($database, $new_user);

    // PHP array to JSON array
    $fp = fopen('json/users.json','w');
    fwrite($fp, json_encode($database, JSON_PRETTY_PRINT));
    fclose($fp);

    $output .= "Account successfully created ";
    
    $signup_status = "signup_success";
    return $output;

  }

  function exists($checkuser){
    global $usernames;

    foreach ($usernames as $username) {
      if ($username == $checkuser){
        return true;
      }
    }
  }
?>