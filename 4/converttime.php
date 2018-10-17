<?php

$second= 7269;

$hours= floor( $second / 3600);

$minutes= ($second / 60 )% 60;

$second = $second % 60;

echo "$hours:$minutes:$second";


?>