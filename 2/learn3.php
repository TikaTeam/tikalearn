<?php

$number=-10 ;
$out ="";

if(  20 >=$number  and    $number >=10       )
{
	$out = "Accept !";
	
}
else if (  $number>=0 and  $number < 10)
{
	$out = "Reject";
	
}
else
{
	$out= "Error";
	
}

print $out;

?>