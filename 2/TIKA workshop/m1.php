<?php
$num1= 16;
$num2 =30 ;
$num3 =70 ;

if($num1 >$num2 and $num1>$num3)
	$maximum= $num1;
else if ($num2 > $num3)
	$maximum= $num2;
else
	$maximum= $num3;

print $maximum;
	
?>