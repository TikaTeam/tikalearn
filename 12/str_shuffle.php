<?php
define("TITLE", 'tikateam.com');

$str= str_shuffle("Davood Fooladi");


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?= TITLE; ?></title>
	</head>
	
	<body>
	<?= $str;?>
	</body>
</html>