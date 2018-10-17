<?php
$num1= 1438;
$num2 =1396 ;
$num3 =2017 ;

if($num1 >$num2)
{
	if (  $num1>$num3 )
	{
		$maximum= $num1;
	}
	else
	{
		$maximum= $num3;
	}
	
}
else
{
	if (  $num2>$num3 )
	{
		$maximum= $num2;
	}
	else
	{
		$maximum= $num3;
	}
	
}

print $maximum;
	
?>