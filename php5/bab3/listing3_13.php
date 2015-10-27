<?php
	//********************************************************
	//title : riview for form and array
	//Bab3
	//file
	//				listing3_12.php
	//				listing3_13.php
	//				listing3_14.php
	//Program by : stendy b. sakur
	//date : jumat 16 juli 2015
	//current page : listing3_13.php
	//********************************************************
	
	// membuat fungsi untuk menghasilkan data
	function buatvisualmatrix ($nama, $baris, $kolom){
		echo "elemen matrix $nama";
		echo "<br />";
		echo "<input name=baris" .$nama ." type=hidden value=$baris />";
		echo "<input name=kolom" .$nama ." type=hidden value=$kolom />";
		
		for ( $i=0; $i < $baris; $i++){
			for ( $j=0; $j < $kolom; $j++){
				echo "<input name=". $nama . "[] type=text id=data size=5 />";
			}
			echo "<br />";
		}
	}
	
	// membuat fungsi untuk memasukan nilai ke matrix
	function masukandatamatrix ($nama, $item, $var_post){
		global $m1_baris, $m1_kolom;
		global $m2_baris, $m2_kolom;
		
		$nama = array (); // data yang bertype array()
		if ($item == 1){
			$baris = $m1_baris;
			$kolom = $m1_kolom;
		}else{
			$baris = $m2_baris;
			$kolom = $m2_kolom;
		}
	$jmldata = sizeof ($var_post);
	$val = 0;
		for ($i=0; $i < $baris; $i++){
			for ($j=0; $j <$kolom; $j++){
				$nama[$i][$j] = $var_post[$val];
				$val++;
			}
		}
		return $nama; //mengembalikan variabel nama ($nama)
	}
	// fungsi membuat penjumlahan matrix
	function penjumlahanmatrix($m1,$m2){
		global $m1_baris, $m1_kolom;
		global $m2_baris, $m2_kolom;
		
		$jmlmatrix  = sizeof ($m1);
		$hasilmatrix = array();
		for ($i=0; $i < $m1_baris; $i++){
			for ($j=0; $j <$m1_kolom; $j++){
				$hasilmatrix [$i][$j] = $m1[$i][$j] - $m2[$i][$J];
			}
		}
		return $hasilmatrix;
	}
	// fungsi menampilkan matrix
	function tampildatamatrix ($matrix, $item){
		global $m1_baris, $m1_kolom;
		global $m2_baris, $m2_kolom;
		
		if ($item == 1){
			$baris = $m1_baris;
			$kolom = $m1_kolom;
		}else{
			$baris = $m2_baris;
			$kolom = $m2_kolom;
		}
		echo "matrix $item : <br />";
		foreach ($matrix as $baris => $value){
			foreach ($value as $kolom => $value){
				echo "[" . $value . "]";
			}
				echo "<br />";
		}
			echo "<br />";
	}
?>