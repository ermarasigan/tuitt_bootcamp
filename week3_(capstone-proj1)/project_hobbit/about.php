<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>About</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- css formatting separated by sections -->
    <link href="css/_header.css" rel="stylesheet" type="text/css">
    <link href="css/about.css" rel="stylesheet" type="text/css">
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

  	<main class="container-fluid">
  		<div class="row">
  			<div id="aboutbox" class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          <div class="container-fluid">
            <div class="row">
              <!-- links for demo purpose -->
              <a href="https://www.wdl.org/en/item/10089/" target="blank_">
                <!-- profile picture -->
                <figure class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <img class="center-block img-responsive" id = "profilepic" src="images/square-profile.jpg" alt="profile pic">
                </figure>
              </a>

              <!-- self description -->
              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
    				    <h1>Why I do what I do</h1>
    				    <p>Hi! I'm Emman, a casual manlalakbay (traveller), mobile photography enthusiast and aspiring writer. I write code for a living and write journals to feel alive. I travel not to escape life but for life not to escape me. </p>
                <p>Born and raised in Batangas, I have learned to swim at a very young age. I've braved the rough seas of Babuyan Strait to find the best beach I've ever laid my eyes on. In a remote volcanic island that also has caves with seas snakes.</p>
                <p>In recent years, I have heeded the call of the mountains to achieve greater heights and to conquer the fear of falling. To climb is to touch the sky and get closer to the creator
                </p>
                <p>But most importantly, travel is not about the places but the people. The unforgettable bonds forged in hardship. The wonderful memories you keep, of smiles and laughter, of rainbows after the rain, of a cold dip in the river after a sunny trek. </p>
              </div>
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