<?php
	$num1= 313;
	$num2= 72;
	$num3= 500;
	$num4= 700;
	
	$max= maximum($num1, $num2);
	$max= maximum($max, $num3);
	$max= maximum($max, $num4);
	
	print $max;
	
	function maximum($param1, $param2)
	{
		if($param1>$param2)
			return $param1;
		else
			return $param2;
	}


?>