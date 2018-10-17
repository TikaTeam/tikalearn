<?php
define("TITLE", "حذف کاراکترهای تکراری");

$str= "Tika is Black Bird! 2017";

function removeDuplicate($string)
{
	$lenght= strlen($string);
	$temp=null;
	for($i=0; $i<$lenght; $i++)
	{
		$find=false;
		for($j=$i+1; $j<$lenght; $j++)
		{
			if($string[$i]== $string[$j])
			{
				$find=true;
				break;
			}				
			
		}
		if($find==false)
			$temp.= $string[$i];
	}
	return $temp;
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
			<b>Text: </b>
			<i><?= $str; ?></i>
		</p>
		
		<hr/>
		
		<p>
			<b>Result: </b>
			<i><?= removeDuplicate($str); ?></i>
		</p>
	</body>
</html>