<?php
	
	$nilaipertama = 0;
	$nilaiterakhir =10;
	
	do {
		if ($nilaipertama % 2){
			echo "$nilaipertama adalah Bilangan Ganjil";
			echo "<br />";
		}
		$nilaipertama++;
	}while($nilaipertama < $nilaiterakhir);

?>