<?php

	$host = "localhost";
	$user = "root";
	$pasword = "root";
	
	// jika tidak memakai "@" maka akan tambil Warning: mysql_pconnect(): Access denied for user 'root'@'localhost' (using password: YES) in C:\xampp\htdocs\php5\bab1\listing1_31.php on line 7
	
	$koneksi = @mysql_pconnect($host,$user,$pasword) or die ("terjadi kesalahan");

?>