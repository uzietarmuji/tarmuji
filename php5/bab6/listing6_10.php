<?php require_once "listing6_9.php"; ?>

<?php
	if (is_array($_FILES["userfile"]["name"])){
		//var_dump ($_FILES["userfile"]["error"]);
		foreach ($_FILES["userfile"]["error"] as $key=>$kesalahan){
			var_dump($key);
			prosesuploaddata($key, $kesalahan, "\php_opp", "images", "userfile");
		}
	}
?>
<html>
<head>
		<title>test upload data</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data" name="form1" id="fomr1">
		<?php tampildaftar(100);?>
		<br>
		file yang akan di-upload
		<input name="MAX_FILE_SIZE" type="hidden" id="MAX_FILE_SIZE" value="300000" />
		<br>
		<?php for ($i=0; $i<$_POST["jmldata"]; $i++) { ?>
			<input type="file" name="userfile[]" id="userfile[]" />
		<br />
		<?php } ?>
		<input type="submit" name="button" id="button" value="upload" />
	</form>
</body>
</html>