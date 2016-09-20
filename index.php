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
		$assoc2 = array('1'=>'a', '2'=>'b', '3'=>'c');
		echo '$assoc2 = ';
		print_r($assoc2);
		echo "<br>";

		?>
	</body>
</html>