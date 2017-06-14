<?php 
	echo "POST Request Example <br>";
	echo "Input: ";
	echo $_POST['input1'];
	echo "<br>";
	echo "Hello " . $_POST['name'];

	echo "<form action='index.php'>";
	echo "<button>Back</button>";
	echo "</form>";
?>