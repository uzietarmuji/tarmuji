<?php
	
	function arrayprint($data){
		foreach ($data as $val){
			echo $val . " ";
		}
	}
	
	// pemanggilan data array
	$dataarray = array ("senin", "selasa", "rabu");
	arrayprint($dataarray);

?>