<?php
//star1(3,10);

//star2(10);

//star3(10);

star4(5,10,3);

	function star1($n,$m)
	{
		for($i=1; $i<=$m; $i++)
		{
			for($j=1; $j<=$n; $j++)
			{
				print '*';
			}
			print '<br>';
			
		}
	}
	
	function star2($n=4)
	{
		for($i=1; $i<=$n; $i++)
		{
			for($j=1; $j<=$i; $j++)
			{
				echo "*";
			}
			echo "<br>";
		}
	}
	
	function star3($n=5)
	{
		for($i=$n; $i>=1; $i--)
		{
			for($j=1; $j<= $i; $j++)
			{
				echo "*";
			}
			echo "<br>";
		}
	}
	
	
	function star4($row, $col1, $col2)
	{
		
		for($i=1; $i<=$row; $i++)
		{
			for($j=1; $j<=$col1; $j++)
			{
				print "*";
			}
			echo "<br>";
			
			for($j=1; $j<=$col2; $j++)
			{
				print "#";
			}
			echo "<br>";
		}
	}
	
	
	

?>