<meta charset="UTF-8" >
<?php
	$height=177;
	$wrist=17;
	$gender= false;
	
	$ratio= $height/$wrist;
	
	switch($gender){
		case false:
			//خانم ها
			if($ratio>=11)
				$out=1;
			else if($ratio>10.1 and $ratio<11)
				$out=2;
			else if($ratio<=10.1)
				$out=3;
			
			break;
		case true:
			//آقایان
			if($ratio>=10.4)
				$out=1;
			else if($ratio>9.6 and $ratio<10.4)
				$out=2;
			else if($ratio<=9.6)
				$out=3;
			break;
	}
	
	switch($out){
		case 1:
			$bodyFrame="ریز";
			break;
		case 2:
			$bodyFrame="متوسط";
			break;
		default:
			$bodyFrame="بزرگ";
		
	}
	
	/*
	if($gender==false)
	{
		//خانم ها
		if($ratio>=11)
			$out="ریز";
		else if($ratio>10.1 and $ratio<11)
			$out="متوسط";
		else if($ratio<=10.1)
			$out="بزرگ";
	}
	else
	{
		//آقایان
		if($ratio>=10.4)
			$out="ریز";
		else if($ratio>9.6 and $ratio<10.4)
			$out="متوسط";
		else if($ratio<=9.6)
			$out="بزرگ";
		
	}
	*/
?>

<p>
	<b>نوع استخوان بندی:</b>
	<?= $bodyFrame;?>

</p>


