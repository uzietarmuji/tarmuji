<?php 
	$dataarray= array ("mangga","pisang","rambutan");
	
	echo "$dataarray[0]";
	echo "<br />";
	echo "$dataarray[2]";
	echo "<br /><br />";
	//mengakses seruh dataarray
	foreach ($dataarray as $buah) {
	echo "nama buah =" . $buah;
	echo "<br />";
	}
?>