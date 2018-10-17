<?php
define("TITLE", 'tikateam.com');

$str= "The Programming Languages ARE Lovely";
$upper=strtoupper($str);
$lower=strtolower($str);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?= TITLE; ?></title>
	</head>
	
	<body>
		<?= "<p>$upper</p>  <p>$lower</p>";	?>	
	</body>
</html>