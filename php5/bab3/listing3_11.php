<?php
	$dataarray = array();
	
	//masukan dataarray
	for ($i = 'A'; $i <= 'F'; $i++){
	$dataarray[] = $i;
	}
	
	// menampilkan data kembali
	echo "ambil data ke empat " . $dataarray[3] . "<br/>";
	
	foreach ($dataarray as $value){
		echo $value . " ";
	}
	
	// melakukan perubahan  pada data ke tiga 
	$dataarray[3]='Z';
	echo "<br/>";
	
	foreach($dataarray as $value){
		echo $value ." ";
	}
	
	//hapus elemen data ke empat 
	unset ($dataarray[2]);
	unset($dataarray[4]);
	
	//tampilkan lagi
	echo "<br/>";
	foreach($dataarray as $value){
			echo $value . " ";
	}
	
	//setelah itu hapus seluruh array 
	unset ($dataarray);
	//tampilkan kembali
	echo "<br/>";
	if (!empty($dataarray)){
		foreach($dataarray as $value){
			echo $value . " ";
		}					
	}else{
		echo "maaf!, array kosong";
	}
?>