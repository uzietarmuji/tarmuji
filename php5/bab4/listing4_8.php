<?php
	
	$nilaix = 100; // mendefinisikan variabel $niaix dengan 100
	$rdata =& $nilaix; // dengan memberikan penugasan variabel
	// dengan nilai yang sama dengan variabel $nilaix
	
	echo "nilai \$rdata = $rdata";
	echo "<br /> tambah \$nilaix dengan 100 ";
	$nilaix += 100; // menambahakan variabe $nilaix dengan 100
	echo "<br /> \$rdata data sekarang adalah $rdata"; 
	// mencetak nilai dari $rdata sekarang nilai nya $rdata 200<?php

//mendifinisikan session_start()
session_start();

//melakukan pemeriksaan pada variabel dengan menekan proses (pengeksekusian)
//pengambilan variabel post (username dan password yang dikirim dari (form1 html)

if (isset($_POST["proses"]) and $_POST["proses"]=="form1"){
	$username = $_POST["username"];
	$password = $_POST["password"];
	

//melakukan pemeriksaan variabel $username dan $password apakah kosang atau ada
if (!empty($username) and !empty($password)){
	// jika tidak kosong (!empty)
	// cek apakah username dan password sama (tervalidasi)
		if ($username == "tarmuji" and $password == "tarmuji"){
			
			$_SESSION["username"] = $username;
			$_SESSION["status"] = "admin";
			header("location:listing4_6.php");
			exit();// penghentian pembacaan script
		}else{
		//melakukana redirect ke halaman sendiri apa bila
		// username dan password tidak sama 
			header("location:$_SERVER[PHP_SELF]");
			exit(); // penghentian pembacaan script 
		}
	}
}
?>
<html>
<head>
	<title> form validasi </title>
</head>
<body>
<!-- pemeriksaan $_SESSION["username"] sudah terisi atau belom kalau 
	kalau blom maka akan menampilkan form1
-->
	<?php if (empty($_SESSION["username"])){ ?>
	<form name="form1" method="post" action="">
		<p>Username
			<input type="text" name="username" id="username">
		</p>
		<p>password
			<input type="password" name="password "id="password">
		</p>
		<p>
			<input type="submit" name="button" id="button" value="login">
			<input name="proses" type="hidden" id="proses" value="form1">
		</p>
	</form>
	<?php } else{ ?>
	<p>This is page provided for </p>
		<?php echo $_SESSION["username"]; ?><br>
		<a href="listing4_7.php">
			log out 
		</a> | <a href="listing4_6.php"> page 2 </a>
	</p>
	<?php } ?>
</body>
</html>
	
?>