<?php
	// file1 : koneksi.php
	$host = "localhost";
	$user = "root";
	$pasword = "";
	
	$koneksi = @mysql_pconnect ($host,$user,$pass) or die ("terjadi kesalahan");
	if ($koneksi){
		echo "koneksi ok";
	} else {
	echo "koneksi gagal";
	}
?>