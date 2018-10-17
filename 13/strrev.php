<?php
define("TITLE", 'strrev');

$str=strrev("hello world!");
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