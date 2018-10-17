<?php
echo fibonacci(4);


function fibonacci($n)
{
	if($n==0)
		return 0;
	
	$a=0;
	$b=1;
	$out= "$a, $b";
	
	for($i=2; $i<=$n; $i++)
	{
		$c= $a+$b;
		$out.=", $c";
		
		$a=$b;
		$b= $c;
		
	}
	
	return $out;
}
?>