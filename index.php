<html>
	<head>
		<title>PHP Arrays</title>
	</head>
	<body>
		<?php
		echo "<h1>PHP Arrays</h1>";

		$test[] = "item 1";
		$test[] = "item 2";
		$test[] = "item 3";
		$test[] = "item 4";
		echo '$test = ';
		print_r($test);

		echo "<br>";

		$assoc['item 1'] = 'one';
		$assoc['item 2'] = 'two';
		$assoc['item 3'] = 'three';
		echo '$assoc = ';
		print_r($assoc);

		echo "<br>";


		?>
	</body>
</html>