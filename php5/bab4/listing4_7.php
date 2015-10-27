<?php
	
	session_start();
	// menghapus data dari session menggunakan usset();
	unset($_SESSION["username"]);
	unset ($_SESSION["status"]);
	//redirect
	header("location:listing4_5.php");
	exit(); // menghentikan proses
?>