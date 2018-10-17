<meta charset="UTF-8" >
<?php
$height= 177;
$weight= 120;

$height= $height /100;
$bmi= $weight / ( pow($height,2));

$bmi = round($bmi, 2);

if($bmi < 15)
	$out= "لاغری بسیار شدید";
else if ($bmi>=15  and $bmi<16)
	$out= "لاغری شدید";
else if ($bmi>=16  and $bmi<18.5)
	$out= "کمبود وزن";
else if ($bmi>=18.5  and $bmi<25)
	$out= "وزن نرمال";
else if ($bmi>=25  and $bmi<30)
	$out= "اضافه وزن";
else if ($bmi>=30  and $bmi<35)
	$out= "چاقی متوسط";
else if ($bmi>=35  and $bmi<40)
	$out= "چاقی شدید";
else if ($bmi>=40 )
	$out= "چاقی بسیار شدید";

print "$bmi - $out";


?>