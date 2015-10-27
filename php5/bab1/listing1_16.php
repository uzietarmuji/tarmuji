<?php
	$nilaix = 10;
	$nilaiy = 20;
	$hasil = $nilaix + $nilaiy;
?>

<html>
	<head>
		<title> script php dan elemen form</title>
	</head>
	<body>
		<form id="form1" name="form1" method="post" action="">
			masukan nilai 
			<input name="nilai" type="text" id="nilai" value="<?php echo $hasil; ?>" />
			<input type="submit" name="bottom" id="bottom" value="submit" />
		</form>
	</body>
</html>