<meta charset="utf-8" >

<?php
$day=1;


 $out= getDay($day);
 
 echo $out;

/*
getDay(2);
getDay(3);
getDay(4);
getDay(5);
getDay(6);
getDay(7);
getDay(8);*/


function getDay($paramDay)
{
	
	switch($paramDay)
	{
		case 1:
			$out= "شنبه";
			break;
		case 2:
			$out= "یکشنبه";
			break;
		case 3:
			$out= "دوشنبه";
			break;
		case 4:
			$out= "سه شنبه";
			break;
		case 5:
			$out= "چهارشنبه";
			break;
		case 6:
			$out= "پنجشنبه";
			break;
		case 7:
			$out= "جمعه";
			break;
		default:
			$out= "Error";
			break;
	}

	return  "<p>$out</p>";	
}







?>