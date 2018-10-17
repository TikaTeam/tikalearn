<?php
$str="Hi TIKA, tikateam.COM 2017";
hI TiKa TiK
function lowUp($string)
{
	$temp=null;
	for($i=0; $i<= strlen($string)-1; $i++)
	{
		$char= ord($string[$i]);
		if($char>=65 and $char<=90)
		{
			//حروف های بزرگ
			$char +=32;
		}
		else if ($char>=97 and $char<=122)
		{
			//حروف های کوچک
			$char -=32;
		}
		$temp.=	chr($char);
	}
	return $temp;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title>lowUp</title>
	</head>
	
	<body>
	<?= lowUp($str);?>
	</body>
</html>