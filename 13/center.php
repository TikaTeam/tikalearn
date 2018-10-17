<?php

$str= "Salam";

function centerChar($string)
{
	$len= strlen($string);
	$center= intval($len/2);
	
	return $string[$center];
	
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title>کاراکتر مرکزی</title>
	</head>
	
	<body>
	<?= centerChar($str);?>
	
	<?php
	
		$len= strlen($str);
		$center= intval($len/2);
	
		echo substr($str, $center, 1 );
	
	?>
	</body>
</html>