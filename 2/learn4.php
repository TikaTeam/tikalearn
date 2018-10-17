<meta charset="utf-8" />

<?php

$body_temperature = 35;
$out="";


if(  36.5<= $body_temperature  and  $body_temperature <= 37)
{
	
	$out= "تب نرمال";
}
else if ( 37.5 <= $body_temperature and $body_temperature <=37.9)
{
	$out= "تب خفیف";
}
else if (40 <= $body_temperature)
{
	
	$out = "تب خطرناک - در معرض تشنج";
}
else
{
	$out= "Error";
}




print $out;
?>