<meta charset="utf-8" >

<?php

print repeat1(1,10, 1, ",") ;
print '<br>';
print repeat2(20,15, 2, "-");

function repeat1($start=1, $end=10,$step=1, $breakOption=",")
{
	$index=$start;
	$out="";
	while($index <=$end)
	{
		$out .= "$index $breakOption";
		
		/*$index = $index + 1;
		$index +=1;*/
		
		$index +=$step;
		//$index ++;
	}
	return $out;
	
}

function repeat2($start=10, $end=1,$step=1, $breakOption=",")
{
	$index=$start;
	$out="";
	while($index >=$end)
	{
		$out .= "$index $breakOption";
		
		/*$index = $index + 1;
		$index +=1;*/
		
		$index -=$step;
		//$index ++;
	}
	return $out;
	
}

?>