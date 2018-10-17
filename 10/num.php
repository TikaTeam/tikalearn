<?php
function num1($row, $col)
{
	$out="";
	for($i=1; $i<=$row; $i++)
	{
		for( $j=1; $j<=$col; $j++)
		{
			$out.=  $i;
		}
		$out.= "<br>\n";
	}
	return $out;
}

function num2($row, $col)
{
	$out="";
	for($i=$row; $i>=1; $i--)
	{
		for( $j=1; $j<=$col; $j++)
		{
			$out.=  $i;
		}
		$out.= "<br>\n";
	}
	return $out;
}

function num3($n)
{
	$out="";
	for($i=1; $i<=$n; $i++)
	{
		for( $j=1; $j<=$i; $j++)
		{
			$out.=  $i;
		}
		$out.= "<br>\n";
	}
	return $out;
}

function num4($n)
{
	$out="";
	for($i=$n; $i>=1; $i--)
	{
		for( $j=1; $j<=$i; $j++)
		{
			$out.=  $i;
		}
		$out.= "<br>\n";
	}
	return $out;
}

function num5($n)
{
	$out="";
	for($i=$n; $i>=1; $i--)
	{
		for( $j=1; $j<=$n - $i + 1; $j++)
		{
			$out.=  $i;
		}
		$out.= "<br>\n";
	}
	return $out;
}

function num6($n)
{
	$out="";
	for($i=1; $i<=$n; $i++)
	{
		for( $j=1; $j<=$i; $j++)
		{
			$out.=  $n - $i +1;
		}
		$out.= "<br>\n";
	}
	return $out;
}

function num7($row, $col)
{
	$out="";
	for($i=1; $i<=$row; $i++)
	{
		for( $j=1; $j<=$col; $j++)
		{
			$out.= $j ;
		}
		$out.= "<br>\n";
	}
	return $out;
}

function num8($row, $col)
{
	$out="";
	
	for($i=1, $k=1; $i<=$row; $i++)
	{
		for( $j=1; $j<=$col; $j++ , $k++)
		{
			$out.= "$k " ;
			
		}
		$out.= "<br>\n";
	}
	return $out;
}

function num9($n)
{
	$out="";
	
	for($i=1, $k=1; $i<=$n; $i++)
	{
		for( $j=1; $j<=$i; $j++ )
		{
			$out.= $k++ . " " ;
			
		}
		$out.= "<br>\n";
	}
	return $out;
}


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tika</title>
	<meta charset='utf-8' />
	
  </head>
  <body>
    <?= num9(4); ?>
  </body>
</html>