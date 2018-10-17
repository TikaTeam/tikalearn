<?php
define("TITLE", 'tikateam.com');

$str=addcslashes("Hello World!'", "we");
$str2= addslashes("Hello \ \"World!'");


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?= TITLE; ?></title>
	</head>
	
	<body>
	<?= $str;?> <br>
	<?= $str2; ?>
	</body>
</html>