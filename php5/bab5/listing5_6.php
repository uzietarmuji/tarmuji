<?php
	
	$vglobalx = 5;
	$vglobaly =10;

	function luashitung ()
	{
		global $vglobalx, $vglobaly;
		$luas = $vglobalx * $vglobaly;
		echo "luas = " . $luas;
		echo "<br />";
	}
	function jumlahdata ()
	{
		global $vglobalx, $vglobaly;
		$jumlahhitung = $vglobalx + $vglobaly;
		echo "jumlah = " . $jumlahhitung;
		echo "<br />";
	}
	
	// proses penampilan data
	
	luashitung();
	jumlahdata();
	
	echo "lakukan perubahan pada nilai y <br />";
	$vglobaly = 0.5;
	echo "cetak kembali <br />";
	luashitung();
	jumlahdata();
?>