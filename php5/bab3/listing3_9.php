<?php
	
	$arraydobel =array ("nama" => array ("panjang"=>"tarmuji" , 
							"pendek"=>"muji"),
				"warna" => array ("panjang"=>"biru" , 
							"pendek "=>"hijau"),
				"hoby" => array ("panjang"=>"penulis" , 
							"pendek"=>"menulis puisi")
			);
	
	echo "Nama User : " . $arraydobel ["nama"] ["panjang"];
	echo "<br />";
	echo "Warna Favorit : " . $arraydobel ["warna"]["panjang"];
	echo "<br />";
	echo "hoby : " . $arraydobel ["hoby"]["panjang"];
	
	echo "<br /><br />";
	foreach ($arraydobel as $item => $value){
		echo $item . "<br />";
		foreach ($value as $nama => $isi){
		echo "&nbsp;&nbsp;" . $nama . "=>" . $isi;
		echo "<br />";
		
		
		}
	}

?>