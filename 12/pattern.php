<?php
function num1($row, $num)
{
	$out='';
	
	for($i=1, $tick=1; $i<=$row; $i++)
	{
		for($j=1; $j<=$i; $j++, $tick++)
		{
			if($tick>$num)
				return $out;
			
			$out.= "$tick ";
			
		}
		$out.= "<br>";
		
	}
	return $out;
}

function multiplicationtable()
{
	$out= "<pre>";
	for($i=1; $i<=10; $i++)
	{
		for($j=1; $j<=$i; $j++)
		{
			$num=$i*$j;
			$out.= "$i*$j=$num\t\t";
		}
		$out.="\n";
	}
	$out.= "</pre>";
	return $out;
}


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title>tikateam.com</title>
	</head>
	
	<body>
	<?= multiplicationtable();?>				
	</body>
</html>