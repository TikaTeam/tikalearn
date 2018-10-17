<?php

$traffic_light = "yellow" ;

$out="none";


if( $traffic_light == "green"  )
{	
	$out = "Go !";
}
else if ( $traffic_light == "red")
{
	$out = "Stop !";
	
}
else if ($traffic_light == "orange" )
{
	$out = "Slow Down!";
	
}
else
{
	$out = "Error";
}

print $out;


?>