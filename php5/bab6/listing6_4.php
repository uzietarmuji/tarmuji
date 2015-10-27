<?php

	if (isset($_POST["proses"]) and $_POST["proses"] == "form1"){
		if (is_array($_POST["data"]))
		{
			foreach ($_POST["data"] as $val){
				if (!empty($val)){
					echo "nilai : ".$val;
					echo "<br />";
			}
		}
	}else{
		echo "sorry!, please fill the input box";
		}
	}
	
?>

<html>
	<head>
		<title>menggunakan is_array</title>
	</head>
	<body>
		<form name="form1" method="post" action="listing6_4.php">
			<table width="251" border="0" cellpadding="2">
			<tr>
				<td colspan="2">contoh masukan data</td>
			</tr>
			<?php for ($i=0; $i<4; $i++){?>
			<tr>
				<td><?php echo ($i+1). ".";?></td>
				<td><input type="text" name="data[]" id="data[]"></td>
			</tr>
			<?php } ?>
			<tr>
				<td><input name="proses" type="hidden" id="proses" value="form1"></td>
				<td><input type="submit" name="botton" id="botton" value="kirim data"></td>
			</tr>
			</table>
		</form>
	</body>
</html>