<?php

	function TestIsset ($nilai=null)
	{
		if(isset($nilai)){
			if(empty($nilai)){
			echo "nilai sudah ada yaitu nilai kosong";
			echo "<br />";
		}else{
			echo "nilai sudah ada yaitu ,$nilai<br />";
		}
		}else{
			echo "nilai belum ada<br />";		
		}
	}

//fungsi utama
$val="";
TestIsset();
TestIsset($val);
TestIsset(10);
?>