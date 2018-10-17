<?php

	$cm= 201099;
	
	$km= floor( $cm / 100000);
	
	$m = floor(($cm % 100000) / 100);
	
	$cm = $cm % 100;


	echo "km = $km <br>  m= $m <br> cm= $cm";

?>