<?php
	$nilaiawal= 0;
	$rtotalnilai = &$nilaiawal;
	
	$data = array (1,5,6,7);
	foreach ($data as $val){
		$rtotalnilai += $val;
	}
	echo "total data = " . $nilaiawal;

?>