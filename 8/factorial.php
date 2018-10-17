<meta charset="utf-8" >

<?php

echo  fact(2);
function fact($n)
{
	if($n==0)
		return 1;
	
	$factorial=1;
	while($n>=1)
	{
		$factorial *= $n;
		$n--;
	}
	
	return $factorial;
}

?>