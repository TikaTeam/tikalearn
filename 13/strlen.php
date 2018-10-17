<?php
define("TITLE", 'www.tikateam.com');

$str="جامعه، زمانی به فرزانگی و سعادت دست می یابد که مطالعه کار روزانه اش باشد، سقراط";

//$len=strlen($str);
$len=mb_strlen($str);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?= TITLE; ?></title>
	</head>
	
	<body>
	<?= $len;?>		
	</body>
</html>