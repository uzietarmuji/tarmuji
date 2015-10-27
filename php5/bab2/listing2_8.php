	<html>
		<head>
			<title>menggunakan for...Loop</title>
		</head>
			<body>
				<form name="form1" method="post" action="">
				<table width="100%" border="0" cellpadding="2">
				
				<tr>
					<td>Tampilkan textfield dengan for</td>
				</tr>
				<?php for($i=0; $i < 5;$i++){?>
				<tr>
					<td>daftar nama
						<input type ="text" name="nama[]" id="nama[]">
					</td>
				</tr>
				<?php } ?>
			</form>
			</body>
	</html>