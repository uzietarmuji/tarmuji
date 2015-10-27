<?php
	
	$array1 = array (1=>"satu", 2=>"dua");
	$array2 = array (1=>"satu", 2=>"dua", 3=>"tiga");
	$array3=array (1=>"apel", "2"=>"mangga", "3"=>"pisang");
	
	$union1to2 = $array1 + $array2;
	$union2to1 = $array2 + $array1;
	$union3to2 = $array3 + $array2;
	
	echo "union :"    . "<br />";
	var_dump($union1to2);
	echo "<br />";
	var_dump ($union2to1);
	echo "<br />";
	var_dump ($union3to2);
	
	echo "<br /><br />operator == dan != : ";
	$equality1to2 = ($array1 == $array2);
	echo "<br />"    ."apakah \$array1 == \$array2 ?, ";
	var_dump($equality1to2);
	
	$notequality1to2 = ($array1 != $array2);
	echo "<br />"  .  "apakah \$array != \$array2 ?,  ";
	var_dump($notequality1to2);
	

?>