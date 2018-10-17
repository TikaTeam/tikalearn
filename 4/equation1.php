<?php
	$a= 313;
	$b= -72;
	$c=12;
	
	if($b>=0)
	{	
		$signB="+";
		$signB2="";
		$b2=-1*$b;
	}
	else
	{	
		$signB="";
		$signB2="+";
		$b2 =  -1* $b;
	}
	
	echo "حل معادله درجه یک  :<br>";
	echo "ax + b =c <br>";
	
	echo "$a X $signB $b = $c <br>";
	
	echo "$a X = $c $signB2 $b2 <br>";
	
	echo "x= ( $c $signB2 $b2 ) / $a <br>";
	
	
	$x= ($c - $b) / $a;
	
	
	
	echo "X= $x";



?>