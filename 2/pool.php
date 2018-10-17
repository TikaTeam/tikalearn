<meta charset="utf-8" />
<?php

	$day=6;
	$gender= false ;
	
	if( $day%2 == 0)
	{
		//روزهاي زوج
		if( $gender==true )
			echo "آقاي محترم، شما مجاز به شنا هستيد";
		else
			echo "سرکار خانم، شما مجاز به شنا نيستيد" ;
	}
	else
	{
		//روزهاي فرد
		if( $gender==true)
		{
			echo "آقاي محترم، شما مجاز به شنا نيستيد";
		}
		else
		{
			echo "سرکار خانم، شما مجاز به شنا هستيد";
			
		}
	}

?>