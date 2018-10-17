<meta charset="utf-8" >

<?php
//echo repeatWord('tikateam.com', 5);

//echo loop(10);

echo loop2(1024);

function repeatWord($string, $step)
{
	$i=1;
	$out='';
	while($i<=$step)
	{
		$out.= "$i=". $string . '<br>';
		$i++;
	}
	return $out;
	
}

function loop($n)
{
	
	$out='';
	for($i=0; $i<=$n; $i++)
	{
		$out.= "2<sup>$i</sup> = ".  pow(2, $i) . '<br>';
		
	}
	
	return $out;
}

function loop2($n)
{
	$out='';
	for($i=1; $i<=$n; $i*=2)
	{
		$out.= $i. '<br>';
	}
	return $out;
}
?>