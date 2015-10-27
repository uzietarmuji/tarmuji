<?php require_once "listing6_8.php"; ?>

<?php
	if (isset ($_POST["button"]) and $_POST["button"]== "upload"){
	
		prosesupload ("userfile", "php_oop", "images");
	}
?>
<html>
<head>
	<title>upload data </title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data" name="form1">
	<p>file yang akan diupload
	<input name="MAX_FILE_SIZE" type="hidden" id="MAX_FILE_SIZE" value="300000">
	<br>
	<input type="file" name="userfile" id="userfile">
	<br>
	<input type="submit" name="button" id="button" value="upload">
	</p>
	</form>
</body>
</html>