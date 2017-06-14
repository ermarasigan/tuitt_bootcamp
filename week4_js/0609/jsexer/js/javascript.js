<!-- Javascript source -->

	var home=document.getElementById('home');

	var start=document.getElementById('start');
		start.addEventListener("click",startgame);

	var back=document.getElementById('back');
		back.addEventListener("click",backtohome);

	var selected=document.getElementById('homeselect');		
	function startgame(){
		home.style.display = "none";
		start.style.display = "none";
		back.style.display = "block";
		switch(selected.value) {
			case '1':
				document.getElementById('g-age')
					.style.display = "block";
				break;

			case '2':
				document.getElementById('g-pascal')
					.style.display = "block";
				break;

			case '3':
				document.getElementById('g-quiz')
					.style.display = "block";
				break;

			case '4':
				document.getElementById('g-rock')
					.style.display = "block";
				break;

			default:
				home.style.display = "block";
				homeselect.focus();
				homeselect.style.color="red";
				start.style.display = "block";
				back.style.display = "none";
		}

	}

	function backtohome(){
		home.style.display = "block";
		start.style.display = "block";
		back.style.display = "none";

		var games=document.getElementsByClassName('game');
		for(i=0;i<games.length;i++) {
			games[i].style.display = "none";
		}

		var msgs=document.getElementsByClassName('message');
		for(i=0;i<msgs.length;i++) {
			msgs[i].style.display = "none";
		}

		homeselect.style.color="black";

		// Reset quiz elements
		document.getElementById('quiz-text').innerHTML = "Quiz time!";
		document.getElementById('quiz-answer').style.display = "none";
		document.getElementById('quiz-start').innerHTML = "Start quiz";

		// Reset rock elements
		document.getElementById('user-rock').style.display = "none";
		document.getElementById('user-paper').style.display = "none";
		document.getElementById('user-scissors').style.display = "none";
		document.getElementById('ai-paper').style.display = "none";
		document.getElementById('ai-scissors').style.display = "none";
		document.getElementById('ai-rock').style.display = "block";
		document.getElementById('rock-msg').innerHTML = "Una'y bato";
		var score=0;
	}

	