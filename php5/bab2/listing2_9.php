<?php

// contoh pertama mengakses
// data array dengan forward_static_call

	$warna = array ("red","green","blue","yellow");
	
	echo "mengakses Data Array dengan for :" . "<br />";
	$hasildata = sizeof($warna);
	for ($i=0; $i < $hasildata; $i++) {
			echo "warna =" . $warna[$i];
			echo "<br />";
		}
// contoh mengakses data depan
// menggunakan foreach
	echo "<br />";
	echo "mengakses Data Array dengan foreach : " . "<br />";
	foreach ($warna as $value){
		echo "warna = " . $value;
		echo "<br />";
	}
?>