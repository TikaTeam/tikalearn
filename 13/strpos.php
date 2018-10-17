<?php
define("TITLE", 'strpos');
$str="I love php, I love php too!";

$str1= strpos  ($str, "php", 8);
$str2= stripos ($str, "PHP");
$str3= strrpos ($str, "php");
$str4= strripos($str, "PHP");

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?= TITLE; ?></title>
	</head>
	
	<body>
	<?= "<p>$str1</p>
		<p>$str2</p>
		<p>$str3</p>
		<p>$str4</p>";
	?>		
	</body>
</html>