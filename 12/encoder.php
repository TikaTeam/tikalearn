<?php
define("TITLE", 'tikateam.com');

$enc=convert_uuencode("گروه توسعه نرم افزاری تیکا");


$dec=convert_uudecode("MVJ_8L=F(V8<@V*K9B-BSV+G9AR#9AMBQV84@V*?9@=BRV*?8L=N,(-BJVXS: #J=BG `");

echo lcfirst("Hello WOrld!");


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?= TITLE; ?></title>
	</head>
	
	<body>
	<?= $dec; ?>
	</body>
</html>