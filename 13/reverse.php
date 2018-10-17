<?php
	
function reverse($string)
{
	$temp=null;
	$len=strlen($string);
	for($i=$len-1 ; $i>=0; $i--)
	{
		$temp.= $string[$i];
	}
	return $temp;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title>string reverse</title>
	</head>
	
	<body>
	<?= reverse("Hello World!");?>
	<br>
	<?= strrev("Hello World!");?>
	</body>
</html>