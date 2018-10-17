<meta charset="UTF-8" >
<?php
	$height=177;
	$wieght=65;
	$age= 25;
	$gender= true;
	
	if($gender==true)
	{
		//برای آقایان
		$bmr= 66 + 13.7 * $wieght +5 *$height - 6.8 *$age;
		
	}
	else
	{
		//برای خانم ها
		$bmr= 655 + 9.6*$wieght + 1.8 * $height - 4.7*$age;
	}
?>

<ol type="I">
	<li>BMR= <?= $bmr;?></li>
	<li>بی تحرک = <?php print ($bmr * 1.2 + 1100); ?></li>
	<li>فعالیت سبک = <?php print ($bmr * 1.375 + 1100); ?></li>
	<li>فعالیت متوسط = <?php print ($bmr * 1.55 + 1100); ?></li>
	<li>فعالیت زیاد = <?php print ($bmr * 1.725 + 1100); ?></li>
	<li>ورزشکار= <?php print ($bmr * 1.9 + 1100); ?></li>
</ol>
    