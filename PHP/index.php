<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
</head>
<body>
<div class="container">
	<form method="GET">
		<input type="text" name="person" placeholder="Zmienna do wyświetlenia + odwrócona funkcja strrev"></input>
		<button>Sumbit</button>
	</form>
	<?php
	/* Fun with php */
	$x = 10;
	$y = 5;

	$style = $_GET['person'];
	$styles = array("Działa","Nie działa");
	echo "<div class='test'>".
	strrev($style).' <= strev || array=> '.$styles[0]
	."</br>";
	echo 6**2//Potęgi 
	."</div>";


		switch ($x) {
			case 10:
				echo 'x równe 10';
				break;
			default:
				echo 'x nie równe żadnej odpowiedzi';
				break;
		}
	?>
</div>
</body>
<link rel="stylesheet" href="css/style.css">
</html>