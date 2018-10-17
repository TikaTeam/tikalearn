<?php

function equation1($a, $b, $c)
{
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
	
	
	$out="";
	$out .=  "حل معادله درجه یک  :<br>";
	$out .= "ax + b =c <br>";
	
	$out .=  "$a X $signB $b = $c <br>";
	
	$out .=  "$a X = $c $signB2 $b2 <br>";
	
	$out .=  "x= ( $c $signB2 $b2 ) / $a <br>";
	
	$x= ($c - $b) / $a;
	$out .=  "X= $x";
	
	return $out;
}


function equation2($a, $b, $c)
{
	//بخش پردازش و محاسبه
	$delta= pow($b, 2) - 4 * $a * $c;

	if($delta<0)
	{
		$out2= "معادله درجه دو ریشه حقیقی ندارد";
	}
	else if($delta>0)
	{
		$x1= (-1*$b - sqrt($delta))  / ( 2 * $a );
		
		$x2= (-1*$b + sqrt($delta))  / ( 2 * $a );
		
		$out2= "$x1 , $x2";
	}
	else if($delta==0)
	{
		$x= -1*$b / (2 *$a);
		
		$out2= $x;
	}

	$signB="";
	if($b>=0)
		$signB="+";

	$signC="";
	if($c>=0)
		$signC="+";

	$b2= -$b;

	//بخش نمایش اطلاعات
	$out = "
		<meta charset='UTF-8' >
		<h3>حل معادله درجه دوم</h3>
		<p>ax<sup>2</sup> + bx + c = 0</p>
		<p>$a x<sup>2</sup> $signB $b x $signC $c = 0</p>
		<hr/>
		
		<h5>مرحله اول - محاسبه دلتا</h5>
		<p>Δ = b<sup>2</sup> - 4ac </p>
		<p>Δ = $b<sup>2</sup> - 4*$a*$c </p>
		<p>Δ = $delta</p>
		<hr/>
		
		<h5>مرحله دوم - بررسی دلتا</h5>
		<p>X = (-b ± √Δ )/ (2a)</p>
		<p>X= ($b2 ± √$delta) / (2 *$a)</p>
		<p>$out2</p>
	";

	return $out;
}

?>