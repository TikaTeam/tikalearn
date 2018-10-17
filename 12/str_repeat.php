<?php
define("TITLE", 'tikateam.com');

//$str=str_repeat("Hi ", 7);

$out="";

for($i=1;$i<=10;$i++)
{
	$out.=str_repeat("*", $i);
	$out.= "<br/>";
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?= TITLE; ?></title>
	</head>
	
	<body>
	<?= $out;?>	
	</body>
</html>