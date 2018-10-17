<?php
define("TITLE", 'substr');


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?= TITLE; ?></title>
	</head>
	
	<body>
		<?php
		echo substr("Hello world",10)."<br>";
		echo substr("Hello world",1)."<br>";
		echo substr("Hello world",3)."<br>";
		echo substr("Hello world",7)."<br>";
		echo "<br>";

		// Positive numbers:
		echo substr("Hello world",0,10)."<br>";
		echo substr("Hello world",1,8)."<br>";
		echo substr("Hello world",0,5)."<br>";
		echo substr("Hello world",6,5)."<br>";
		echo "<br>";
		
		// Negative numbers:
		echo substr("Hello world",-1)."<br>";
		echo substr("Hello world",-10)."<br>";
		echo substr("Hello world",-8)."<br>";
		echo substr("Hello world",-4)."<br>";
		echo "<br>";

		// Negative numbers:
		echo substr("Hello world",0,-1)."<br>";
		echo substr("Hello world",-10,-2)."<br>";
		echo substr("Hello world",0,-6)."<br>";		
		?>	
	</body>
</html>