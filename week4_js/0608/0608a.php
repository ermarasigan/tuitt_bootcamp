<!DOCTYPE html>
<html>
<head>
	<title>Javascript 2.0</title>


	<script src="js/jquery.min.js"></script>

	<style type="text/css"> 
		.salmon {
		width: 50px; 
		height: 50px; 
		background:salmon; 
		/*border: 1px solid white; */
		display: inline-block;
		text-align: center;
		vertical-align: center;
		}
		.lavender {
		width: 50px; 
		height: 50px; 
		background:lavender; 
		/*border: 1px solid white; */
		display: inline-block;
		}

		.calc{
			width: 60px;
			height: 40px;
			margin: 3px;
		}

		#display{
			font-size: 40px;
			color: blue;
			/*text-align: right;*/
		}

	</style>


</head>
<body>
<!-- 	<?php
		echo "<h1> Pascals Triangle </h1>";
		$n = array(0,1,0,0,0,0,0,0,0,0,0,0,0);
		echo "<table>";
		for($i=1; $i<=8; $i++){
			for($j=$i; $j>=1; $j--){
				$n[$j]=$n[$j]+$n[$j-1];
			}
			echo "<tr>";
			for($k=1; $k<=$i; $k++){
				echo "<td style='padding: 10px'>";
				echo $n[$k];
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	?> -->


	<!-- <input type="text" id="input"></input>
	<button id="submit">Submit</button>
	<h3 id='greet'></h3>

	<script type="text/javascript">
		document.getElementById('submit')
			.onclick = function(){
				var input = document.getElementById('input').value;
				// alert(input);
				document.getElementById('greet').innerHTML = 'Hello ' + input;
			}	
	</script> -->

	<input type="text" id="input1"></input>
	<input type="text" id="input2"></input>
	<button id="add">Add</button>
	<button id="subtract">Subtract</button>
	<button id="compare">Compare</button>
	<h3 id='greet'></h3>

	<script type="text/javascript">
		document.getElementById('add')
			.onclick = function(){
				var input1 = document.getElementById('input1').value;
				var input2 = document.getElementById('input2').value;
				document.getElementById('greet').innerHTML = 
				'Sum is ' + (parseInt(input1) + parseInt(input2));
			}	
		document.getElementById('subtract')
			.onclick = function(){
				var input1 = document.getElementById('input1').value;
				var input2 = document.getElementById('input2').value;
				document.getElementById('greet').innerHTML = 
				'Difference is ' + (parseInt(input1) - parseInt(input2));
			}
		document.getElementById('compare')
			.onclick = function(){
				var input1 = parseInt(document.getElementById('input1').value);
				var input2 = parseInt(document.getElementById('input2').value);
				if (input1 > input2) {
					document.getElementById('greet').innerHTML = 
					input1 + ' is greater than ' + input2;
				} else if (input1 < input2) {
					document.getElementById('greet').innerHTML = 
					input1 + ' is less than ' + input2;
				} else {
					document.getElementById('greet').innerHTML = 
					input1 + ' is equal to ' + input2;
				}
				
			}
	</script>


	<!-- <button id="eval">Evaluate</button>

	<script type="text/javascript">
		// alert((Math.random));
		document.getElementById('eval')
			.onclick = function(){
				// floor = round down ceil round up
				var number = Math.floor((Math.random()*10) + 1);
				alert(number);
			}
	</script> -->

	<h1>What age will you marry?</h1>

	<input type="number" id="guess" placeholder="Guess"></input>
	<button id="check">Check</button>

	<h3 id="greek"></h3>

	<script type="text/javascript">
		var random = Math.floor((Math.random()*10) + 26);
				// alert(random);

		document.getElementById('check')
			.onclick = function(){
				var guess = parseInt(document.getElementById('guess').value);
				if (guess > random) {
					document.getElementById('greek').innerHTML = 
					'LOWER';
				} else if (guess < random) {
					document.getElementById('greek').innerHTML = 
					'HIGHER';
				} else {
					document.getElementById('greek').innerHTML = 
					'CORRECT!';
				}
			}
	</script>

	<input type="text" id="input3" placeholder="Square Grid x by x"></input>
	<button id='loop'>Loop</button>
	<h3 id='great'></h3>

	<script type="text/javascript">
		// document.getElementById('great').innerHTML = '';

		document.getElementById('loop')
			.onclick = function() {
				var input3 = parseInt(document.getElementById('input3').value);

				document.getElementById('great').innerHTML = '';
				for(x=0;x<input3;x++) {
					// document.getElementById('great').innerHTML += '* ';
					for(y=0;y<input3;y++) {
						if((x+y)%2==0){
							document.getElementById('great').innerHTML += 
							'<div class="salmon"></div> ';
						} else {
							document.getElementById('great').innerHTML += 
							'<div class="lavender"></div> ';
						}
					}
					document.getElementById('great').innerHTML += '<br>';
				}
			}
	</script>

	<h1> Pascals Triangle </h1>
	<input type="text" id="input4" placeholder="How low can you go"></input>
	<button id='pascal'>Pascal</button>
	<h3 id='groot'></h3>

	<script type="text/javascript">
		document.getElementById('pascal')
			.onclick = function() {
				var n = [0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
				var input4 = parseInt(document.getElementById('input4').value);

				document.getElementById('groot').innerHTML = '';
				for(i=1; i<=input4; i++){
					for(j=i; j>=1; j--){
						// n[j+1]=0;
						n[j]=n[j]+n[j-1];
					}
					for(k=1; k<=i; k++){
						document.getElementById('groot').innerHTML += 
						'<div class="salmon">' + n[k] + '</div>';
					}
					document.getElementById('groot').innerHTML += '<br>';
				}
		}
	</script>


	<span id="display"></span> <br>

	<button class="calc" id="button7">7</button>
	<button class="calc" id="button8">8</button>
	<button class="calc" id="button9">9</button>
	<button class="calc" id="buttonplus">+</button> 
	<br>
	<button class="calc" id="button4">4</button>
	<button class="calc" id="button5">5</button>
	<button class="calc" id="button6">6</button> 	
	<button class="calc" id="buttonminus">-</button>
	<br>
	<button class="calc" id="button1">1</button>
	<button class="calc" id="button2">2</button>
	<button class="calc" id="button3">3</button> 
	<button class="calc" id="buttontimes">*</button>
	<br>
	<button class="calc" id="button0">0</button>	
	<button class="calc" id="buttonclear">clear</button>
	<button class="calc" id="buttonequals">=</button>	
	<button class="calc" id="buttondivide">/</button> 

	<script type="text/javascript">
		var disp = parseInt($('#display').html());
		var save = 0;
		var oper = ' ';

		$('#button0').click( function(){
			$('#display').html(disp*10)
			disp=disp*10
		});
		$('#button1').click( function(){
			$('#display').html(disp*10+1)
			disp=disp*10+1
		});
		$('#button2').click( function(){
			$('#display').html(disp*10+2)
			disp=disp*10+2
		});
		$('#button3').click( function(){
			$('#display').html(disp*10+3)
			disp=disp*10+3
		});
		$('#button4').click( function(){
			$('#display').html(disp*10+4)
			disp=disp*10+4
		});
		$('#button5').click( function(){
			$('#display').html(disp*10+5)
			disp=disp*10+5
		});
		$('#button6').click( function(){
			$('#display').html(disp*10+6)
			disp=disp*10+6
		});
		$('#button7').click( function(){
			$('#display').html(disp*10+7)
			disp=disp*10+7
		});
		$('#button8').click( function(){
			$('#display').html(disp*10+8)
			disp=disp*10+8
		});
		$('#button9').click( function(){
			$('#display').html(disp*10+9)
			disp=disp*10+9
		});
		$('#buttonclear').click( function(){
			disp=0
			save=0
			oper=' '
			$('#display').html(disp)
		});


		$('#buttonplus').click( function(){
			save = disp
			$('#display').html('+')
			disp=0;
			oper='p'
		});

		$('#buttonminus').click( function(){
			save = disp
			$('#display').html('-')
			disp=0;
			oper='m'
		});

		$('#buttontimes').click( function(){
			save = disp
			$('#display').html('*')
			disp=0;
			oper='t'
		});

		$('#buttondivide').click( function(){
			save = disp
			$('#display').html('/')
			disp=0;
			oper='d'
		});


		$('#buttonequals').click( function(){
			if (oper=='p') {
				save += disp
			}
			// alert(oper)
			if (oper=='m') {
				save -= disp
			}
			if (oper=='t') {
				save *= disp
			}
			if (oper=='d') {
				save /= disp
			}
			$('#display').html(save)
		});

		document.onkeypress = function (e) {
			var keyPressed = String.fromCharCode(e.which);
			if($("#display").length>0){
				$("#display").append(keyPressed);
			} else {
				$("#display").text(keyPressed);
			}
		}

	</script>

	<hr>

	<h4 id="quiz"> Quiz time </h4>
	<input type="text" id="answer" style="display:none"></input>
	<button type="submit" id="start">Start</button>

	<script type="text/javascript">
		var questions=[null,
			'What is the longest word?',
			'Where is the capital of Finland?',
			'Who is the bride of goblin?',
			'Why do birds suddenly appear?',
			'When was the Philippine declaration of independence?'];
		var answers=[null,
			'pneumonoultramicroscopicsilicovolcanoconiosis',
			'helsinki',
			'Ji Eun Tak',
			'everytime you are near',
			'June 12, 1898'];
		var c=0;
		var i=1;

		// .onclick = function()
		var start=document.getElementById('start')
		start.addEventListener("click",questionnaire);

		// .onkeypress = function()
		var input=document.getElementById('answer')

		input.addEventListener("keydown", function(e){
			if (e.keyCode === 13) {
				questionnaire();
			}
		});

		function questionnaire(){
			if (i<=5){		
				
				document.getElementById('quiz').innerHTML = questions[i];
				document.getElementById('answer').style.display = "inline";
				document.getElementById('start').innerHTML = "Next";
				var answer=document.getElementById('answer').value.toLowerCase();					
				if (answer == answers[i-1]) {
					++c;
				}
				// console.log(answer)
				// console.log(answers[i-1])
				// console.log(c)
				document.getElementById('answer').value = '';
				document.getElementById('answer').focus();
				++i;

			} else {
				var answer=document.getElementById('answer').value;	
				if (answer == answers[i-1]) {
					++c;
				}
				// console.log(answer)
				// console.log(answers[i-1])
				// console.log(c)
				document.getElementById('quiz').innerHTML = "Correct answers: " + c;
				document.getElementById('answer').style.display = "none";
				// document.getElementById('start').style.display = "none";
				document.getElementById('start').innerHTML = "Restart quiz";
				i=1;
				c=0;
			}
		}

	</script>

<!-- 	<h1>Enter your wage</h1>
	<input type="text" id="wage" value="" size=20></input>
	<button id="sub">Submit</button>

	<script type="text/javascript">
		var wage = document.getElementById("wage");
			wage.addEventListener("keydown", function(e){
				if (e.keyCode === 13) {
					validate(e);
				}
				console.log('huuuy');
			});

			function validate(e) {
				alert('yey');
				console.log('waaaa');
			};
	</script> -->

</body>
</html>