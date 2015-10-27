<?php
function TestEmpty($nilai){
	if (!empty($nilai)){
		echo "nilai yang anda masukan adalah ".$nilai;
		echo "<br />";
	}else{
		echo "data kosong";
		echo "<br />";
	}
}

//fungsi utama
TestEmpty(5);
TestEmpty(10);
TestEmpty("");
TestEmpty(null);
TestEmpty("halo..");

?>
