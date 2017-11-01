<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Kalkulator</title>
</head>
<body>
	<div class="container">
		<p>Dzisiaj jest:
			<?php
			$day = date("w");
			switch ($day) {
				case '0':
				echo "Niedziela!";
				break;
				case '1':
				echo ":Poniedziałek!";
				break;
				case '2':
				echo "Wtorek!";
				break;
				case '3':
				echo "Środa!";
				break;
				case '4':
				echo "Czwartek!";
				break;
				case '5':
				echo "Piątek!";
				break;
				case '6':
				echo "Sobota!";
				break;
			}
			?>
		</p>
		<?php
		$x = 1;
		// Najpierw sprawdza poźniej wypisuje
		while ($x <= 2) {
			echo "X równa się ".$x."<br>";
			$x++;
		}
		echo "<br>";

		$y = 1;
		// Najpierw zrobi do później sprawdzi czy się zgadza
		do {
			echo "Y równa się ".$y."<br>";
			$y++;
		}
		while ($y <= 3 );

		echo "<br>";

		$arr = array("Kuba", "Jan", "Maciek");

		for ($c=0; $c < count($arr); $c++) { 
			echo "Imie to {$arr[$c]}</br>";
		}

		echo "<br>";
		// Jeśli nie znamy długości i nie chcemy nieskończoności
		foreach ($arr as $key) {
			echo "My name is {$key} </br>";
		}

		echo "<br>";
		$c = 2;
		function fun($a)
		{
			$a *= 4;
			echo "Pomnożone przez 4 </br>c = {$a}";
		};
		fun($c);
		?>


	</div>
</body>
<link rel="stylesheet" href="css/style.css">
</html>