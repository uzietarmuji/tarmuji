<?php
	
	$datainput = 23.56;
	$tipedata = gettype($datainput); // fungsi ini digunakan untuk mengambil type data
	
	switch ($tipedata)
	{
		case "integer" :
		case "double" :
			$tipedata ="bertipe bilangan";
			$ovarloaddata = $datainput;
		break;
		case "boolean" :
			$tipedata = "bertipe data boolean";
			if ($tipedata){
				$ovarloaddata = "true";
			}else{
				$ovarloaddata ="false";
			}
		break;
		case "string" :
			$tipedata = "bertipe data string";
			$ovarloaddata = "$datainput";
		break;
		
	}
	echo "\$datainput =$ovarloaddata <br />";
	echo $tipedata;
?>