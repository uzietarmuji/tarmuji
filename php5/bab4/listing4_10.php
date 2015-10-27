<?php
	$nilaiawal=5;
	$rtotaldata = $nilaiawal;
	
	$data = array(1,5,6,7);
	foreach ($data as $val){
		$rtotaldata += $val;
	}
	
	echo "total data = " . $rtotaldata;
	
	//unset nilai 
	unset ($nilaiawal);
	echo "<br />" . $rtotaldata;
	echo "<br />" . $nilaiawal;
	$nilaiawal =+ 100;
	echo "<br />" . $rtotaldata;
	echo "<br />" . $nilaiawal;
?>