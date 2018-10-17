<?php
define("TITLE", 'tikateam.com');

$str="Hello <b><i>world!</i></b> <br> Tika";
$filter= strip_tags($str, "<b><i>");

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?= TITLE; ?></title>
	</head>
	
	<body>
	<?= $filter;?>		
	</body>
</html>