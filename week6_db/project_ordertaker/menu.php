<?php 
	session_start();

	function get_title() {
	echo 'Menu page';
	}
?>

<?php require_once "partials/_acct_logout.php" ?>
<?php require_once "partials/_acct_update.php" ?>
<?php require_once "partials/_acct_delete.php" ?>
<?php require_once "partials/_jollibee.php" ?>
<?php require_once "partials/_showmenu.php" ?>
<?php require_once "partials/_addtocart.php" ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- <title>Ordertaker</title> -->
    <title><?php get_title() ?></title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Formatting -->
	<link rel="stylesheet" type="text/css" href="css/general_stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/_header.css">
	<link rel="stylesheet" type="text/css" href="css/_footer.css">
	<link rel="stylesheet" type="text/css" href="css/menu_stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/font_declarations.css">
	<?php require_once "partials/_favicon.html"; ?>

</head>
<body>

	<!-- Header partial -->
	<?php 
	require_once "partials/_header_menu.php";
	 ?>

	<!-- Main menu container -->
	<main id="menubg" class="container-fluid">
  		<div class="row">
			<div id ="menubox"
			class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<?php
				if ($_SESSION != null) {
				// if ($_SESSION['username'] > '') {
					switch ($_SESSION['choose']) {
						case 'jollibee':
							show($jollibee);
							break;
						
						default:
							break;
					}
				}
				// }
				?>
			</div>
			<?php
			if ($_SESSION != null) {
				$cartuser=$_SESSION['username'];
				showcart($cartuser);
			// 	echo '<div id="cartbox" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">';
			// 	echo '<h1>Your cart</h1>';
			// 	echo '</div>';
				}
			?>	
		</div>
	</main>


  	<!-- Footer partial -->
  	<?php require_once "partials/_footer.html"; ?>

	<!-- Update modal partial -->
  	<?php require_once "partials/_modal_update.php"; ?>

  	<!-- Log out modal partial -->
  	<?php require_once "partials/_modal_logout.php"; ?>
 	 	

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  

	<!-- Javascript for countdown timer) -->
    <!-- <script src="js/home_countdown.js"></script> -->

    <!-- Javascript for menu modals (delete/update) -->
    <script src="js/menu_modals.js"></script>
    
	
</body>
</html>