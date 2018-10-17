<?php
define("TITLE", 'tikateam.com');

$str="Count the number of words in a string";

$count=str_word_count($str);

$len= strlen($str);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?= TITLE; ?></title>
	</head>
	
	<body>
		<?= $count;?>	
		
		<?= $str[$len - 1];?>
		
	</body>
</html>