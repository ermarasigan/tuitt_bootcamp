<?php 
  session_start();

  function get_title() {
  	global $title;
    global $host;
    if ($host=='localhost') {
  	  $title='Karauke (localhost)';
    } else {
      $title='Karauke Home page';
    }
  	echo $title;
  }
?>

<!-- Header Partial (including php functions) -->
<?php require_once "partials/_header.php"; ?>

<!-- Main Section -->
<main class="container-fluid" id="welcomebg">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
			<div id="whiteborder">
        <!-- Welcome text changes when user is logged in -->
			  <h2 id="welcometext"> 
          <?php
            if(!isset($_SESSION['username'])){
              echo "Play the Ukulele <br> Karaoke Style!"; 
            } else {
              echo "Welcome back <br>" . $_SESSION['username']. "!"; 
            }
          ?>
        </h2>
        <!-- Search bar for song title/artist -->
        <form id="searchform" method="POST" action="">
          <!-- Javascipt for search in js/scrolling-nav -->
          <input id="search" type="text" name="find" placeholder="Title or artist" >
          <a id="searchbtn" class="btn btn-default btn-lg page-scroll" href="#">
            Find
          </a>
        </form>
			</div>
		</div>
	</div>
</main>

<!-- About Section -->
<section id="about" class="about-section">
  <div class="container">
    <!-- Display recent searches (see phpfun/songShow) -->
    <div class="row">
      <h2>
        <?php 
          if(isset($_SESSION['username'])){
            echo $_SESSION['username'] . " searched for";
          } else {
            echo "Recent Searches";
          }
        ?>
      </h2>
    </div>
    <div class="row">
      <?php 
          searchShow();
      ?>
    </div>

    <!-- Display user picks when logged in (see phpfun/songShow) -->    
    <?php 
      if(isset($_SESSION['username'])){
        echo "
          <div id='userpicks' class='row'>
            <h2> <br> </h2>
          </div>
          <div class='row'>
            <h2>";
        echo $_SESSION['username'] . "'s Picks";
        echo "
            </h2>
          </div>
          <div class='row'>";
            userpickShow();
        echo "
          </div>";
      }
    ?>
    
    <!-- Display top picks for all users (see phpfun/songShow) --> 
    <div class="row">
      <h2> <br> </h2>
    </div>
    <div class="row">
      <h2> 
        Users' Top Picks
      </h2>
    </div>
    <div class="row">
      <?php 
        allpickShow();
      ?>
    </div>
  </div>
</section>

<!-- Footer Partial (including javascript) -->
<?php require_once "partials/_footer.php"; ?>