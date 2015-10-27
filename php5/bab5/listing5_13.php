<?php
	function lihatstring(&$data)  // & = menggabungakan isi variabel
	// tidak ada (&) data tidak tampil
	{
		$data .= "saya dari dalam fungsi";
	}
	
	// lakukan proses data
	$teks="hallo apa kabar ....,";
	lihatstring($teks);
	echo $teks;
	
?>