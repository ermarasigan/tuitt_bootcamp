<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gallery - Benguet</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/_header.css" rel="stylesheet" type="text/css">
    <link href="css/province.css" rel="stylesheet" type="text/css">
    <link href="css/gallery.css" rel="stylesheet" type="text/css">
    <link href="css/_footer.css" rel="stylesheet" type="text/css">
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">        

    <style type="text/css">
      path[title="Benguet"] {
        fill: #f3901b;
        fill-opacity: 1;
        stroke: gold;
        stroke-width:1;
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
  	<?php include 'partials/_header.html' ?>

  	<main class="container-fluid">
  		<div class="row">
  			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
  				<h1>Mt Pulag Gallery</h1>
  				<h3>Kabayan, Benguet</h3>

  				<div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="thumbnail">
                  <a href="images/pulag1.jpg" target="_blank">
                    <img src="images/pulag1.jpg" alt="pulag summit" style="width:100%">
                    <div class="caption text-center">
                      <p>View at the Mt Pulag summit, highest point in Luzon</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="thumbnail">
                  <a href="images/pulag2.jpg" target="_blank">
                    <img src="images/pulag2.jpg" alt="pulag road" style="width:100%">
                    <div class="caption text-center">
                      <p>Yellow brick road to peak 3</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="thumbnail">
                  <a href="images/pulag3.jpg" target="_blank">
                    <img src="images/pulag3.jpg" alt="pulag mossy" style="width:100%">
                    <div class="caption text-center">
                      <p>The mossy forest</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="thumbnail">
                  <a href="images/pulag4.jpg" target="_blank">
                    <img src="images/pulag4.jpg" alt="pulag solo" style="width:100%">
                    <div class="caption text-center">
                      <p>Made it to the top!</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="thumbnail">
                  <a href="images/pulag5.jpg" target="_blank">
                    <img src="images/pulag5.jpg" alt="pulag lenticular clouds" style="width:100%">
                    <div class="caption text-center">
                      <p>Lenticular clouds hover above like UFO's</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>
  			</div>

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
  				<?php include 'partials/_ph-map.html' ?>
  			</div>
  		</div>
  	</main>

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