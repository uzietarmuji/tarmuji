<?php
	function cetakarray($data = array("tarmuji","anak","soleh")){
		foreach ($data as $val){
			echo $val ." ";
		}
		echo "<br />";
	}
	//TAMPILKAN ARRAY
	$data = array ("tarmuji","pasti", "akan","BERHASIL");
	
	//MEMANGGIL FUNGSI 
	cetakarray();
	cetakarray($data);
?>