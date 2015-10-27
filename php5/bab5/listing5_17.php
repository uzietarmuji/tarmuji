<?php
	function jumlahdata()
	{
		$datajumlah = func_num_args(); // digunakan untuk mengambil data didalam argumen. mengambil jumlah data yang akan dimasukan lewat argumen.  
		
		$datatotal = 0;// membuat variabel total (menampung jumlah datatotal)
		
		for ($x= 0; $x < $datajumlah;$x++){
			$datatotal += func_get_arg($x);// digunakan untuk mengambil daftar argumen didalam fungsi (menjumlahkan seluruh data) untuk mengambil data dalam argumen
		}
			echo "total data = ". $datatotal;
			echo "<br /";
			$daftararray = func_get_args();
			for ($y=0;$y < $datajumlah;$y++){
				echo "nilai = ". $daftararray[$y];
				echo "<br />";
			}
	}
	jumlahdata(10,20,5,15);
?>