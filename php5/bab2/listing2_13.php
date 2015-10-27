<?php

	echo "index :";
	
	for ($i=64; $i < 91; $i++){
		echo "<a href=# title" . chr($i) . ">";
		echo "chr($i)";
		echo "</a>&nbsp";
	}
	echo "<hr />";
?>