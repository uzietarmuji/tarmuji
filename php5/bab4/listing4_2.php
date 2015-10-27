<?php
	session_start(); // untuk menggunakan objek session 
	
	if (!isset($_SESSION["count"])){ //melakukan proses pemerikasaan (sudah eksis atau belom)
		$_SESSION["count"]=0; // jika session belom keksis 
	}else{
		$_SESSION["count"]++; // tetapi jika sudah maka ditambah 
	}
	if ($_SESSION["count"] == 0){ // apakah session count sama dengan nol
		echo "ada baru melihat halamat ini ";
	}else{
		echo "anda sudah melihat halaman ini sebanyak ";
		echo $_SESSION["count"];
	}
	

?>