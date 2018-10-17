<?php
define("TITLE", "حذف کاراکتر");

$str= "Tika is Black Bird! 2017";
$del="a iB2";

function deleteChar($string, $delChar)
{
	$len1=strlen($string);
	$len2=strlen($delChar);
	
	$temp=null;
	for($i=0; $i<$len1; $i++)
	{
		$find=false;
		for($j=0; $j<$len2; $j++)
		{
			if($string[$i] ==$delChar[$j])
			{
				$find= true;
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
			<b>Text:</b>
			<i><?=$str;?></i>
		</p>
		
		<p>
			<b>delete Characters:</b>
			<i><?=$del;?></i>
		</p>
		
		<p>
			<b>result:</b>
			<i><?= deleteChar($str, $del);?></i>
		</p>
		
	
	</body>
</html>