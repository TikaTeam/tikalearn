<?php

echo pow2(2,-3);

function pow2($base, $exponent)
{
	$pow= 1;
	
	for($i=0; $i< abs($exponent); $i++)
	{
		$pow *= $base;
	}
	
	if($exponent<0)
		$pow= 1/$pow ;
	
	return $pow;
}
?>