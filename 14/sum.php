<?php
define("TITLE", "عملیات جمع اعداد در رشته");
$str= "1396 Tika is Black Bird! 2017";

function sum($string)
{
	$lenght= strlen($string);
	$sum=0;
	$temp=null;
	for($i=0; $i<$lenght; $i++)
	{
		$character=$string[$i];
		$ascii= ord($character);
		
		if($ascii>=48 and $ascii<=57)
		{
			$sum += $character;
			/*if($i==0)
				$temp .= "$character";
			else
				$temp .= "+ $character";*/
			
			$temp .= "+ $character";
		}
	}
	$temp= ltrim($temp,"+");
	return "$temp = $sum";
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?= TITLE;?></title>
	</head>
	
	<body>
		<h3><?= TITLE;?></h3>
		<p>
			<b>Text:</b>
			<i><?= $str;?></i>
		</p>
		
		<p>
			<b>Result=</b>
			<i><?= sum($str);?></i>
		</p>
	

	</body>
</html>