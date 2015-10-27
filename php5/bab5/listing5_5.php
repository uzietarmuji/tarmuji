<?php
	//membuat variabel didalam fungsi
	function hitung()
	{
		$nilaix =5;
		$nilaiy =20;
		echo "jumlah =" . ($nilaix + $nilaiy);
		echo "<br />";
	}
	
	function luashitung()
	{
		// mengenal variabel local
		$luas = $nilaix * $nilaiy;
		echo $luas;
	}
	// memanggil fungsi
	
	hitung();
	echo "luas =";
	luashitung();
	
	
?>