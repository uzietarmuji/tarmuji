<?php
// melakukan pokok fungsi perhitungan 
 function perhitunganhasil($a,$b){
 // dilakukan proses perkalian
	$jumlah = $a * $b;
// hasil perhitungan akan dikirim
	return $jumlah;
 }
 
 // definisikan variabel
 $panjang =5;
 $lebar=10;
 $jumlah = perhitunganhasil($panjang,$lebar);
 
 // cetak 
 
 echo "jumlah =" . $jumlah;
 echo "<br /> atau dapat ditulis ";
 echo "seperti ini, jumlah =";
 echo perhitunganhasil($panjang,$lebar);

?>