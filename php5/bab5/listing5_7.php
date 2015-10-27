<?php
	function nilaitidakstatic()
	{
		$awal = 1;
		echo $awal;
		$awal++;
	}
	
	echo "tidak menggunakan STATIC";
	for ($i=1;$i <= 10; $i++){
		nilaitidakstatic();
	}
	
	echo "<br />";
	function staticnilai(){
		static $awalnilai = 1;
		echo $awalnilai;
		$awalnilai++;
	}
	echo "menggunakan nilai static :";
	for ($j=1; $j <= 10; $j++){
		staticnilai();
	}
?>