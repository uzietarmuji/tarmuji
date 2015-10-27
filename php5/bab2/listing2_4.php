<?php

	$nilai1 = 100;
	$nilai2 = 150;
	$proses = "penjumlahan";
	
	switch ($proses)
	{
		case "perkalian":
			$hasil = $nilai1 * $nilai2;
			break;
		case "penjumlahan":
			$hasil =$nilai1 + $nilai2;
			break;
		default :
			$hasil = "error tidak ada hasil";
			break;
	}
	echo "hasil $proses =" . $hasil;

?>