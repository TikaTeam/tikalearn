<?php
function pattern1()
{
	$out='';
	for($i=0; $i<=5; $i++)
	{
		for($j=0; $j<=10; $j++)
		{
			$out.= "$i $j<br>";
		}
		$out.= "<hr>";
		
	}
	return $out;
}

function timer()
{
	$out='';
	$c=1;
	for($i=0; $i<=12;$i++)
	{
		for($j=0; $j<60; $j++)
		{
			for($k=0; $k<=59; $k++)
			{
				$out.= "$c= $i:$j:$k<br>";
				$c++;
			}
		}
		
	}
	return $out;
}

function pattern2()
{
	$out='';
	for($i=1; $i<=20; $i++)
	{
		if($i%2==0)
		{
			$sign="-";
		}
		else
		{
			$sign="+";
		}
		$out.= "$sign $i<br>";
	}
	return $out;
}

function pattern3()
{
	$out='';
	for($i=1; $i<=20; $i++)
	{
		if($i%4==0)
		{
			$sign="-";
		}
		else
		{
			$sign="+";
		}
		
		$out.= "$sign $i<br>";
	}
	return $out;
}

function pattern4()
{
	$out='';
	
	for($i=1, $j=1; $i<=20; $i++, $j++)
	{
		if($j<=2)
			$sign="+";
		else
			$sign= '-';
		
		if($j==5)
			$j=0;
		
		$out.= "$sign $i<br>";
		
	}
	return $out;
}

function num1()
{
	$out='';
	for($i=1; $i<=10; $i++)
	{
		for($j=1; $j<=5; $j++)
		{
			$out.= "$j";
			if($i%2==0)
			{
				break;
			}
			
		}
		$out.= "<br>";
	}
	return $out;
}

function num2()
{
	$out='';
	for($i=1; $i<=11; $i++)
	{
		for($j=1; $j<=7; $j++)
		{
			$out.= "$j";
			if($i%3==0 and $j>3)
			{
				break;
			}
			
		}
		$out.= "<br>";
	}
	return $out;
}

function num3()
{
	$out='';
	for($i=0; $i<11;$i++)
	{
		if($i%2==0)
		{
			for($j=1;$j<=4; $j++)
			{
				$out.= "$j";
			}
		}
		else
		{
			for($j=4;$j>=1; $j--)
			{
				$out.= "$j";
			}

		}
		
		$out.= "<br>";
	}
	return $out;
}

function num4($row,$col, $num)
{
	$out='';
	$tick=1;
	for($i=1; $i<=$row; $i++)
	{
		for($j=1; $j<=$col; $j++)
		{
			if($tick>$num)
				break;
			
			$out.= "$tick ";
			$tick++;
		}
		$out.= "<br>";
		if($tick>$num)
			break;
		
		
	}
	return $out;
}



?>