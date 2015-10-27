<?php

	$nilaipertama =0;
	$nilaiterakhir=10;
	
	while($nilaipertama < $nilaiterakhir)
	{
		if(!($nilaipertama % 2)){
			echo "$nilaipertama adalah bilangan genap";
			echo "<br />";
	}
	$nilaipertama++;
	}
?>