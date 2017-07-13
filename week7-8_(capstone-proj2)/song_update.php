<?php 
  session_start();

  function get_title() {
  	global $title;
  	$title='Karauke Update song';
  	echo $title;
  }
?>

<!-- Header Partial (including php functions) -->
<?php require_once "partials/_header.php"; ?>

<!-- Main Section -->
<main class="container" id="addsongbg">
	<div class="row">
		<h2 class="text-center">
			<?php 
				$playlines=[];

				if(!isset($_SESSION['role'])){
					$_SESSION['role']='';
				}
				if ($_SESSION['role']=='admin') {
					echo "Update Song";
					$playid		= $_GET['id'];
					$playtitle 	= $_SESSION['playtitle'];
		      		$playartist	= $_SESSION['playartist'];
		      		$playyear	= $_SESSION['playyear'];
		      		$playbpm	= $_SESSION['playbpm'];

		      		// Get song chords 
		      		$playchords=[];
					$filename = "json/songs/song" . $playid . "_chords.json";
					if(is_file($filename)) {
						fopen($filename,'r');
						$string = file_get_contents($filename);
						$playchords = json_decode($string, true);
					}

					// Get song chords 
		      		$playlyrics=[];
					$filename = "json/songs/song" . $playid . "_lyrics.json";
					if(is_file($filename)) {
						fopen($filename,'r');
						$string = file_get_contents($filename);
						$playlyrics = json_decode($string, true);
					}

					for($i=0;$i<sizeof($playlyrics);$i++) {
						array_push($playlines, $playchords[$i]);
						array_push($playlines, $playlyrics[$i]);
					}

				} else {
					echo "Preview Song";

				}
			?>
		</h2>
	</div>

	<!-- Song details inputs for add/update -->
	<div class="row">
		<div class="col-md-4 col-lg-4">
			<div class="form-group">
              <input type="text" class="form-control" id="songtitle" name="songtitle" placeholder="Song Title"
              <?php 
              	echo "value='$playtitle'";
              ?>
              >
              <label for="songartist"></label>
              <input type="text" class="form-control" id="songartist" name="songartist" placeholder="Song Artist"
              <?php 
              	echo "value='$playartist'";
              ?>
              >
              <div class="row">
              	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              			<label for="songyear"></label>
		            	<input id="songyear" class="form-control" type="number" min=1900 placeholder="Song Year"
		            	<?php 
			              	echo "value=$playyear";
			            ?>
		            	>
		        </div>
		        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		        		<label for="songbpm"></label>
		            	<input id="songbpm" class="form-control" type="number" min=0 placeholder="Beats Per Minute"
		            	<?php 
			              	echo "value=$playbpm";
			            ?>
		            	>
		       	</div>
		      </div>
            </div>
            <div id="picupload" class="row">
            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="input-group">
		                <label class="input-group-btn">
		                	<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
			                    <span class="btn btn-primary">
			                        Upload Image&hellip; <input id="file" name="file" type="file" style="display: none;">
			                    </span>
		                    </form>
		                </label>
		                <input type="text" class="form-control" readonly placeholder="(Optional)">
              		</div>
              		<br>
            	</div>
            </div>
         </div>



         <!-- Text area input for chords and lyrics -->
		<div class="col-md-6 col-lg-6">
			<textarea id="textarea" rows="8" cols="30" placeholder="Type chords and lyrics in alternate lines. Preview partially by selecting lines." required="required"><?php 
              	foreach ($playlines as $playline) echo "\n" . $playline;
            ?></textarea>
		</div>
		
		<!-- Buttons for preview, play, stop, save -->
		<div class="col-md-2 col-lg-2 text-center">
			<?php 
				if ($_SESSION['role']=='admin') {
					echo "
					<button id='previewbtn' type='button' class='btn btn-default btn-info' 
							onclick='previewLyrics()'>Preview</button>
							";
				}
			?>
			<button id='togglebtn' class='btn btn-default btn-default' type='submit' 
					onclick='toggleLyrics();'>Play</button>
			<?php 
				if ($_SESSION['role']=='admin') {
					echo "
					<input id='songid' type='hidden' value='$playid'>
					<button id='savebtn' class='btn btn-default btn-success' type='submit' 
							onclick='saveSong();'>Save</button>";
				}
			?>
			<button id='stopbtn' class='btn btn-default btn-default' type='submit' 
					onclick='stopSong();'>Stop</button>
		</div>
	</div>

	<!-- Canvas where karaoke text is rendered -->
	<canvas id="draw-pad" width="700" height="120">
	</canvas>
</main>

<!-- Chord Section -->
<section id="chordlookup" class="about-section">
  <div class="container">
    <div class="row">
    	<div class="text-center">
    		<h2>Look up Chords</h2>
    	</div>
    	<br>
    	<div class="col-lg-6 col-lg-offset-3">
		    <form action="#chordlookup" method="post">
				<input id="searchtabs" type="text" name="chord" placeholder="Type chords separated by spaces">
				<button type="submit" class="btn btn-default btn-lg" name="convert">
					Get chord tabs
				</button>
			</form>
		</div>
	</div>
	<div class="row">
		<br>
		<?php 
			convertChords('large')
		?>
	</div>
  </div>
</section>

<!-- Footer Partial (including javascript) -->
<?php require_once "partials/_footer.php"; ?>