<?php 
  session_start();

  function get_title() {
  	global $title;
  	$title='Karauke Play song';
  	echo $title;
  }
?>

<!-- Header Partial (including php functions) -->
<?php require_once "partials/_header.php"; ?>

<!-- Main Section -->
<main class="container" id="addsongbg">
	
	<!-- Retrieve song details for playing -->
	<div class="row">
		<h2 class="text-center">
			<?php
				$playlines=[];

				if(isset($_SESSION['username'])) {
					// Check if lyric file exists
		      		$playid		= $_GET['id'];
					$filename = "json/songs/song" . $playid . "_lyrics.json";

					// Get song lyrics 
		      		$playlyrics=[];
					if(is_file($filename)) {
						$playtitle 	= $_SESSION['playtitle'];
		      			$playartist	= $_SESSION['playartist'];
		      			$playyear	= $_SESSION['playyear'];
		      			$playbpm	= $_SESSION['playbpm'];
		      			echo $playtitle . " - " . $playartist . " (" . $playyear . ")";

		      			fopen($filename,'r');
						$string = file_get_contents($filename);
						$playlyrics = json_decode($string, true);
		      		}
	      		}
			?>
		</h2>
	</div>

	<div class="row">
		<br>
		<div class="text-center">
		<?php 
			if(isset($_SESSION['username'])) {
				$playchords=[];

				// Get song chords and display
				$filename = "json/songs/song" . $playid . "_chords.json";

				if(is_file($filename)) {
					fopen($filename,'r');
					$string = file_get_contents($filename);
					$playchords = json_decode($string, true);
					showChords('small',$playchords);
				}

				for($i=1;$i<sizeof($playlyrics);$i++) {
					array_push($playlines, $playchords[$i]);
					array_push($playlines, $playlyrics[$i]);
				}
			}
		?>
		</div>
	</div>

	<!-- Buttons for play, stop -->
	<div class="row">		
		<div class="text-center">
			<button title='Play/Pause on Karaoke Mode' id='togglebtn' class='btn btn-default btn-primary' type='submit' 
					onclick='toggleLyrics();'>Play</button>
			<button title='Stop and Reset Karaoke' id='stopbtn' class='btn btn-default btn-default' type='submit' 
					onclick='stopSong();'>Stop</button>
			
			<?php
				if(isset($_SESSION['username'])) {
					echo "
						<button title='Read chords and lyrics in text form' id='viewbtn' class='btn btn-default btn-info' type='submit' 
							onclick='readText();'>Read</button>";

					echo "
					<input type='hidden' id='getid' value='$playid'>";
					if(isset($playbpm)){
						echo "
					<input type='hidden' id='getbpm' value='$playbpm'>";
					} else {
						echo "
					Chosen song does not exist on database";
					}

				} else {
					echo "
					Log in to play song";
				}
			?>
		</div>
	</div>


	<div class="row">
		<div class="text-center">
			<textarea id='songtext' rows='40' cols='40' spellcheck="false" disabled>
				<?php
					if(isset($_SESSION['username'])) {
					    foreach ($playlines as $playline) {
	          				echo "\n" . $playline;
	          			}
	          		}
              	?>
            </textarea>
		</div>
	</div>


	<!-- Canvas where karaoke text is rendered -->
	<canvas id="draw-pad" width="700" height="120">
	</canvas>
</main>

<!-- Footer Partial (including javascript) -->
<?php require_once "partials/_footer.php"; ?>