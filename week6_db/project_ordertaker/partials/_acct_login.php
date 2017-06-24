<?php
  // Do this once to create the *.json file
  // $users = [
  //       ['groupcode' => 'TUITT',
  //        'username' => 'admin',
  //        'password' => 'master']
  //      ,['groupcode' => 'TUITT',
  //        'username' => 'emman',
  //        'password' => 'master']
  // ];
  // $fp = fopen('json/users.json','w');
  // fwrite($fp, json_encode($users,JSON_PRETTY_PRINT));
  // fclose($fp);

  $login_status = '';

  if(isset($_POST['login'])){

    // Retrieving data from *.json file
    $string = file_get_contents('json/users.json');
    $users = json_decode($string, true);

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $groupcode = strtoupper(htmlspecialchars($_POST['groupcode']));

    $choose = ($_POST['choose']);    

    function authenticate($username,$password,$groupcode){
      global $users;
      global $login_status;
      foreach($users as $user) {
        if($username == $user['username'] && 
           $password == $user['password'] &&
           $groupcode == $user['groupcode']) {
          return true;
        }
      }
    }

    if(authenticate($username,$password,$groupcode)){
      // echo 'User is valid';
      $_SESSION['username'] = $username;
      $_SESSION['groupcode'] = $groupcode;
      $_SESSION['choose'] = $choose;
      header('location:menu.php', true, 301);
    }else{
      // echo '<span style="color:red">';
      // echo '<br>Incorrect login details';
      // echo '</span>';

      //force javascript error
      echo '<script type="text/javascript"> 
              var status="login_error";
              document.getElementById("#login_modal").showModal();
            </script>';
      $login_status = 'login_error';

    } 
  }
?>