<?php
	session_start()// untuk menggunakan objek session
		
	$_SESSION["username"] = "tarmuji"; //proses pengisian dalam session
	
	// melakukan pencetakan
	echo $_SESSION ["username"];
	echo "<br />";
	
	// melakukan proses pengecekan 
	if ($_SESSION["username"] == "tarmuji"){
		echo "user di ijinkan";
	}else{
		echo "tidak ijinkan ";
		
	}
?>