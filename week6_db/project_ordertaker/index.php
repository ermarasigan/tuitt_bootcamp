<?php 
  session_start();

  function get_title() {
  echo 'Home page';
  }
?>

<?php require_once "partials/_acct_login.php"; ?>
<?php require_once "partials/_acct_signup.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head -->

    <title><?php get_title() ?></title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Formatting -->
	<link rel="stylesheet" type="text/css" href="css/general_stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/_header.css">
	<link rel="stylesheet" type="text/css" href="css/_sections.css">
	<link rel="stylesheet" type="text/css" href="css/_footer.css">
	<link rel="stylesheet" type="text/css" href="css/font_declarations.css">
	<?php require_once "partials/_favicon.html"; ?>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="2">

	<!-- Header partial -->
	<?php require_once "partials/_header_home.php"; ?>

	<!-- Main welcome container -->
	<main class="container-fluid">
  		<div class="row">
  			<div id="welcomebg" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  				<div id="countdown">
		  			<h2 id="countdown-text"> Log in and lock in <br> your orders in</h2>
		  			<h6 id="countdown-clock" style="padding-top: 10px"></h6>
		  		</div>
  			</div>
  		</div>
  	</main>

  	<!-- Home page sections -->
  	<?php require_once "partials/_sections.html"; ?>

  	<!-- Footer partial -->
  	<?php require_once "partials/_footer.html"; ?>

	<!-- Sign up modal partial -->
  	<?php require_once "partials/_modal_signup.php"; ?>

	<!-- Log in modal partial -->
  	<?php require_once "partials/_modal_login.php"; ?>
 	 	

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  

    <!-- Javascript for sticky header -->
	<script src="js/stickyheader.js"></script>

	<!-- Javascript for countdown timer) -->
    <script src="js/home_countdown.js"></script>

    <!-- Javascript for homepage modals (signup/login) -->
    <script src="js/home_modals.js"></script>
	
</body>
</html>