<?php
$temperature=32;

if( 15<= $temperature    and    $temperature<=20)
{
	$out ="شرايط نرمال";
}
else if(   (10<= $temperature    and    $temperature<15)  or       (20< $temperature    and    $temperature<=25)   )
{
	$out= "شرايط خطرناک";
	
}
else if( $temperature<10  or     25<$temperature    )
{
	$out="شرايط از دست رفته";
}


print $out;
	



?>