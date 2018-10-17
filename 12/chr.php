<?php
define("TITLE", 'tikateam.com');


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?= TITLE; ?></title>
	</head>
	
	<body>
	<?php
		for($i=0; $i<256; $i++)
		{
			echo $i . "= ". chr($i) . "<br>";
		}
	
	?>
	</body>
</html>