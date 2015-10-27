<?php
function catakarray ($data = array()){
	
	// menggunakan default array
	foreach ($data as $val){
		echo $val . "<br />";
	}
}
	// tampilkan data array
	$dataarray = array("kita","pasti","akan","berkasil","PASTI");

catakarray();
catakarray($dataarray);
?>