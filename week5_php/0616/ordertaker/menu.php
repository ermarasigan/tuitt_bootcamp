<?php require_once "partials/_jollibee.php" ?>
<?php require_once "partials/_getmenu.php" ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>The Ordertaker</title>
	<link rel="stylesheet" type="text/css" href="css/menu.css">

</head>
<body>

	<form method="POST" action ="">
		<?php 
			$username = $_SESSION['username'];
			$dispname = ucfirst($username);
			echo "<span>";
			echo "<br><br>Hi $dispname, order na tayo sa ";
			echo ucfirst($_SESSION['choose']) . "<br>";
			echo "</span>";
			echo create_dropdown($jollibee,'CATEGORY');
			echo create_dropdown($jollibee,'DRINK');
		?>
		<input type="submit" name="submit" value="Submit">
	</form>

	<main>
		<?php
			switch ($_SESSION['choose']) {
				case 'jollibee':
					show($jollibee);
					break;
				
				default:
					break;
			}
			
		?>
	</main>

	<form method="POST" action ="" id="logout">
		<input type="submit" name="logout" value="Logout">
			<?php require_once "partials/_logout.php" ?>
	</form>

</body>
</html>