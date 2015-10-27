<?php 

//***********************************************8
//	Title : Review for Form and Array
//	Bab3
//	file :
//			list3_12.php
//			list3_13.php
//			list3_14.php
//	Program by : stendy b. sakur
//	date : jumat, 26 desember 2008
//	current page : list3_14.php
//***********************************************8
	
require_once "listing3_13.php"; 

// jika tombol submit di tekan
// berarti proses perhitungan matriks di lakukan
if (isset($_POST["proses"]) and $_POST["proses"] == "form1"){
	
	$m1_baris = $_POST["barism1"];
	$m1_kolom =  $_POST["kolomm1"];
	$m2_baris = $_POST["barism2"];
	$m2_kolom = $_POST["kolomm2"];
	$operasi = $_POST["operasi"];
	
	if (!empty($m1_baris) and !empty($m1_kolom) and 
		!empty($m2_baris) and !empty($m2_kolom)){ 
		
		$m1 = masukkanDataMatrix ("m1", 1, $_POST["m1"]);
		$m2 = masukkanDataMatrix ("m2", 2, $_POST["m2"]);
		
		if ($operasi == "jumlah"){
			$hitungMatrix = penjumlahanMatrix($m1,$m2);	
			$operasi = "Operasi Penjumlahan : <br />";
		}else{
			$hitungMatrix = penguranganMatrix($m1,$m2);	
			$operasi = "Operasi Pengurangan : <br />";
		}
		
		tampilDataMatrix($m1,1);
		tampilDataMatrix($m2,2);
		
		echo $operasi;
		tampilDataMatrix($hitungMatrix,'hasil');
		
	}
}

?>
<?php
// blok untuk mengambil data
// yang di kirim dari form html page: list3_12.php


$m1_baris = $_POST["m1_baris"];
$m1_kolom = $_POST["m1_kolom"];
$m2_baris = $_POST["m2_baris"];
$m2_kolom = $_POST["m2_kolom"];

if (empty($m1_baris) and empty($m1_kolom) and 
	empty($m2_baris) and empty($m2_kolom)) {
	// jika user tidak memasukkan ukuran matriks secara
	// explicit maka program secara default
	// akan menampilkan ukursan 2 x 2.
	$m1_baris = 2;
	$m1_kolom = 2;
	$m2_baris = 2;
	$m2_kolom = 2;
}
?>
<html>
<head>
<title>SIMPLE MATRIX</title>
</head>

<body>
<?php if (isset($_POST["button"]) and $_POST["button"] == "Submit"){ ?>
<form id="form1" name="form1" method="post" action="">
	<?php if (!isset($_POST["proses"]) and $_POST["proses"] != "form1"){ ?>
	<?php
	// membuat form tampilan
	// untuk input matrix
	buatVisualMatrix("m1",$m1_baris, $m1_kolom);
	buatVisualMatrix("m2",$m2_baris, $m2_kolom);	
	?>
	<input type="submit" name="button" id="button" value="Submit" />
	<select name="operasi" id="operasi">
		<option value="jumlah">Penjumlahan</option>
		<option value="kurang">Pengurangan</option>
	</select>
	<input name="proses" type="hidden" id="proses" value="form1" />
  	<?php } ?>
</form>
<?php } ?>
</body>
</html>