<meta charset="utf-8" >

<?php
$day=88;


if(  $day== 1 )
	$out= "شنبه";
else if( $day==2)
	$out= "یکشنبه";
else if( $day==3)
	$out= "دوشنبه";

else if( $day==4)
	$out= "سه شنبه";

else if( $day==5)
	$out= "چهارشنبه";

else if( $day==6)
	$out= "پنجشنبه";

else if( $day==7)
	$out= "جمعه";
else
	$out= "Error";


print $out;

?>