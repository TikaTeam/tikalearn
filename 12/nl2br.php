<?php
define("TITLE", 'tikateam.com');

$str=nl2br("aaaaa \n bbbbb \n \n \n ccccc");


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