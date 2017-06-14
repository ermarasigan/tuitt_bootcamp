<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- css formatting separated by sections -->
    <link href="css/_header.css" rel="stylesheet" type="text/css">
    <link href="css/home.css" rel="stylesheet" type="text/css">
    <link href="css/_footer.css" rel="stylesheet" type="text/css">
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
    <!-- icon on browser -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- partial containing the header -->
    <?php include 'partials/_header.html' ?>

    <!-- welcome box for homepage -->
  	<main class="container-fluid">
  		<div class="row">
  			<div id="welcomebox" class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
  				<h1>Welcome to emmanlalakbay</h1>
  				<h3>Personal travel blog of a nerdy traveller</h3>
  				<p>Join me on my quest to reach all corners of the Philippines
          <br> Click a province to start</p>
  			</div>

        <!-- partial containing the map -->
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
  				<?php include 'partials/_ph-map.html' ?>
  			</div>
  		</div>
  	</main>

    <!-- partial containing the footer -->
    <?php include 'partials/_footer.html' ?>  	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  

    <!-- additional javascript to enable dropdown submenu -->
    <script src="js/submenu.js"></script>  
  </body>
</html>