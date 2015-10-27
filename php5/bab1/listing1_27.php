<?php
	
	$nama = "winny";
	$$nama ="ayu";
	$$$nama ="perwitasari";
	
	echo "model print 1 :<br />";
	echo "$nama";
	echo " ";
	echo "$winny";
	echo " ";
	echo "$ayu";
	echo "<br /><br />model print 2 : <br />";
	echo "$nama ${$nama} ${$$nama}";
	
?>