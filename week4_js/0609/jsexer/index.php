<!DOCTYPE html>
<html>
<head>
	
	<title>Javascript Exercise</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

</head>
<body>
	<main>
		<div id="home" class="center">
			<h1>9999</h1>
			<h1>GAMES</h1>
			<h1>IN 1</h1>
			<form>
				<select id="homeselect">
					<option selected disabled hidden>
						Select Game
					</option>
					<option value = "1">
						1) What age will you marry? 
					</option>
					<option value = "2">
						2) Pascal's Triangle 
					</option>
					<option value = "3">
						3) Take a quiz
					</option>
					<option value = "4">
						4) Rock Paper Scissors
					</option>
				</select>
			</form>
		</div>

		<button id="start" class="lowerright">Start</button>
		<button id="back" class="lowerright">Back</button>

		<!-- (Game) What age will you marry -->
		<div id="g-age" class="game center">
			<?php include 'partials/_age.html' ?>
		</div>

		<!-- (Game) Generate a Pascal's triangle -->
		<div id="g-pascal" class="game center">
			<?php include 'partials/_pascal.html' ?>
		</div>

		<!-- (Game) Take a trivia quiz -->
		<div id="g-quiz" class="game center">
			<?php include 'partials/_quiz.html' ?>
		</div>

		<!-- (Game) Rock Paper Scissors -->
		<div id="g-rock" class="game center">
			<?php include 'partials/_rock.html' ?>
		</div>

		<!-- Javascript source -->
		<script src="js/javascript.js"></script>

	</main>

</body>
</html>