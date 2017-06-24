<?php session_start(); ?>
<?php require_once "phpfun/connectdb.php"; ?>
<?php require_once "phpfun/showmenu.php"; ?>
<?php require_once "phpfun/updateitem.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head -->

	<title>Home Page</title>

	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font_declarations.css">

    <!-- Formatting -->
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

</head>
<body>

	<!-- Header Partial -->
	<?php require_once "partials/_header.php"; ?>

	<div class="container-fluid" id="welcomebox">
		<div class="row text-center">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<h1> Everyone loves to eat </h1>
				<?php showmenu('update'); ?>

				
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				
			</div>

	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), 
    or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  

</body>
</html>