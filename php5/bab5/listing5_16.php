<?php
	
	function kubushitung ($x, &$rluas, &$rvolum){
		if ($x != 0){ // jika $x tidak sama dengan 0
			$rluas =$x * $x; // hitung luas 
			$rvolum = $x * $x * $x; // hitung kubus 
			return 1;		// keluar dari fungsi 
		}else{
			return 0;   // keluar fungsi 
		}
	}
	
	// membuat program utama
	
	$nilai = 5;
	$kubusluas = 0;
	$kubusvolum = 0;
	$proses =kubushitung($nilai, $kubusluas , $kubusvolum);
	if ($proses){
		echo "luas kubus = ". $kubusluas;
		echo "<br /> volume kubus = " . $kubusvolum;
	}else{
		echo "ini tidak boleh 0";
	}
	

?>