<?php
	function penjumlahan()
	{
		$nilaix = 5; // variabel local 
		$nilaiy = 10; // variabel local 
		$hasil = $nilaix + $nilaiy;
		echo $hasil;
	}
	
	function perkalian()
	{
		echo "penjumlahan =";
		penjumlahan();
		
		echo "<br /> perkalian = ";
		// mengakses variabel local
		$kali = $nilaix * $nilaiy; 
		echo $kali;
	}
	// tampilkan data
		perkalian();
?>