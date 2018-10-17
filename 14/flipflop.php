<?php

$str= "Tika is Black Bird! 2017";

function flipFlop($string)
{
	$lenght= strlen($string);
	$temp=null;
	for($i=0; $i<$lenght; $i++)
	{
		$character=$string[$i];
		if($i%2==0)
		{
			$temp.=strtolower($character);
		}
		else
		{
			$temp.=strtoupper($character);
		}
		
	}
	return $temp;
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title>tikateam.com</title>
	</head>
	
	<body>
	<?= flipFlop($str);?>
	</body>
</html>