<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Province - Benguet</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- css formatting separated by sections -->
    <link href="css/_header.css" rel="stylesheet" type="text/css">
    <link href="css/province.css" rel="stylesheet" type="text/css">
    <link href="css/_footer.css" rel="stylesheet" type="text/css">
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
    <!-- icon on browser -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">        

    <!-- formatting unique to this province -->
    <style type="text/css">
      path[title="Benguet"] {
        fill: #f3901b;
        fill-opacity: 1;
        stroke: gold;
        stroke-width:1;
      }
      #visitedbox {
        background-image: url("images/benguet.jpg");
      }   
    </style>
     
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

  	<main class="container-fluid">
  		<div class="row">
        <!-- province description -->
  			<div id="visitedbox" class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
  				<h1 class="strokeme">Benguet</h1>
  				<h3 class="strokeme">Cordillera Administrative Region</h3>
  				<p class="strokeme">The highland province is known as the Salad Bowl of the Philippines due to its huge production of upland vegetables. Situated within the interior of Benguet is the highly urbanized city of Baguio, which is administratively independent from the province.</p>

          <!-- links to gallery, itinerary, journal -->
          <div class="container-fluid">
            <div class="row" id="province-links">
              <a href="g-benguet.php" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="text-center strokeme">
                  <span class="icon_images"></span>
                  Mt Pulag Gallery
                </div>
              </a>
              <a href="i-benguet.php" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="text-center strokeme">
                  <span class="icon_calendar"></span>
                  Mt Pulag Itinerary
                </div>
              </a>
              <a href="j-benguet.php" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="text-center strokeme">
                  <span class="icon_pencil-edit_alt"></span>
                  Mt Pulag Journal
                </div>
              </a>
            </div>
          </div>
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