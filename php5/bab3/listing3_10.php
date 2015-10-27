<?php
	$dataarray = array();
	
	//masukan dataarray
	for ($i='A'; $i<='F'; $i++){
		$dataarray[]=$i;
	}
	
	//menampilkan data kembali 
	echo "ambil data keempat " . $dataarray[3],"<br/>";
	
	foreach ($dataarray as $value){
		echo $value." ";
	}
	// melakukan perubahan pada data ke tiga
	$dataarray[3] ='Z';
	echo "<br/>";
	
	foreach ($dataarray as $value){
		echo $value ." ";
	}
?>