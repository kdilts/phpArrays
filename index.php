<html>
	<head>
		<title>PHP Arrays</title>
	</head>
	<body>
		<?php
		echo "<h1>PHP Arrays</h1>";

		// regular array
		$test[] = "item 1";
		$test[] = "item 2";
		$test[] = "item 3";
		$test[] = "item 4";
		echo '$test = ';
		print_r($test);
		echo "<br>";

		// associative array
		$assoc['item 1'] = 'one';
		$assoc['item 2'] = 'two';
		$assoc['item 3'] = 'three';
		echo '$assoc = ';
		print_r($assoc);
		echo "<br>";

		// array keyword - regular array
		$arr = array('a','b','c');
		echo '$arr = ';
		print_r($arr);
		echo "<br>";

		// array keyword - associative array
		$assoc2 = array('one'=>'a', 'two'=>'b', 'three'=>'c');
		echo '$assoc2 = ';
		print_r($assoc2);
		echo "<br>";

		// multi dimensional array
		echo "<br>";
		$twoD = array(
			array(1,2,3),
			array(4,5,6),
			array(7,8,9)
		);
		echo '$twoD = ';
		print_r($twoD);
		echo "<br>";
		$y = 0;
		foreach($twoD as $oneD){
			$x = 0;
			foreach($oneD as $item) {
				echo("| $x,$y: $item |");
				$x++;
			}
			echo"<br>";
			$y++;
		}

		?>
	</body>
</html>