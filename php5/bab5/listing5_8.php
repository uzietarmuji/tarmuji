<?php
	function hitungluaspersegipanjang($panjang,$lebar)
	{
		$luas = $panjang * $lebar;
		echo $luas;
	}
	
	// mendefinisikan variabel
	$x = 5;
	$y = 10;
	
	// tampilkan luas
	echo "luas =";
	hitungluaspersegipanjang($x, $y);
?>