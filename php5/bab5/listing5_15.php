<?php
	function hasilarray($awalnilai = 1, $akhirnilai = 20)
	{
		$daftararray=array();
		for ($awalnilai; $awalnilai <= $akhirnilai; $awalnilai)
		{
			$data = $awalnilai*0.5+ 10;
			$daftararray[$awalnilai] = $data;
		}
		return $daftararray;
	}
	
	// melakukan proses data 
	$a = 5;
	$b = 12;
	$returnarray = hasilarray($a,$b);
	foreach ($returnarray as $key => $val  )
	{
		echo $key ." => ". $val;
		echo "<br />";
	}
?>