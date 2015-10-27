<?php
	if (isset($_POST["proses"]) and
		$_POST["proses"] == "form1"){
		$username = trim($_POST["nama"]);
	}
?>
<html>
	<head>
		<title>SIMPLE FORM</title>
	</head>
	
	<body>
		<form name="form1" method="POST"
						action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Nama Anda
		<input type="text" name="nama" id="nama">
		<input name="proses" type="hidden"
					id="proses" value="form1">
		<input type="submit" name="button" id="button" value="kirim"
					id="button" value="kirim">
		</form>
		<?php
		if(!empty($username)){
			echo "<hr />";
			echo "Your name is " . $username;
		}else{
			echo "<hr />";
			echo "sory, type your name";
		}
		?>
	</body>
</html>