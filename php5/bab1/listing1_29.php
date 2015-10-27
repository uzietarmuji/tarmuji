<?php
	
	$a = 100;
	$b = 120;
	$c = 134.50;
	
	$hasil = $a > $b;
	$test = $a !== $b;
	echo "apakah $a > $b ?<br />";
	echo "jawabannya : " ;
	var_dump($hasil);
	echo "<br /><br />";
	echo "apakah $a !== $c ?";
	echo "<br />";
	echo "jawabanya :";
	var_dump($test);
	echo "<br />apakah $a === $b ?";
	var_dump($a === $c);				

?>