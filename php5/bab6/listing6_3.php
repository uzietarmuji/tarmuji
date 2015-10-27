<?php
function testunset($nilai=null)
	{	
		if (!isset($nilai)){
			echo "nilai sudah tidak exist lagi <br/>";
		}else{
			echo "nilai sudah ada <br/ >";
		}
	}
	//fungsi utama
	$val="";
	$data=100;
	testunset();
	testunset($val);
	testunset($data);
	unset($data);
	testunset($data);
?>