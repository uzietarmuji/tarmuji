<?php session_start();  // ?> <!-- mengaktifkan session_start(); -->

<html>
<head>
	<title>	halaman ke dua </title>
<head>
<body>
	<?php if ($_SESSION["status"] == "admin"){?> <!-- digunakan untuk melakukan pemeriksaan apakah user yang masuk berstatus "admin" jika benar ditampilkan selanjutnya -->
	<table width="1005" border="0" cellpadding="2">
	<tr>
		<td> selamat datang
		<?php echo $_SESSION["username"]; ?> </td>
	</tr>	
	<tr>
		<td>This informasion is provide for admin only.</td>
	</tr>
	<tr>
	<td> [a href="listing4_5.php" > index </a> ] </td>
	</tr>
	</table>
	<?php } ?>
</body>
</html>
