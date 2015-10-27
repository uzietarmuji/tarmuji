<?php
// ********************************************
// title : review for form and array 
// bab 3
// file 	: 
// 					listing3_12.php
//					listing3_13.php
//					listing3_14.php
// program by : stendy b.sakur
// date :jumat 26 desember 2008
// current page : listing3_14.php
// 8*******************************************

require_once "listing3_13.php";

// jika tombol sabmit ditekan tampildatamatrix($m1,1);
			tampildatamatrix($m2,2);
			
		echo $operasi;
			tampildatamatrix($hitungmatrix,'hitung');
// bererti proses perhitungan matriks di lakukan

if (isset($_POST["proses"]) and $_POST["proses"] == "form1"){
	$m1_baris = $_POST["barism1"];
	$m1_kolom = $_POST["kolomm1"];
	$m2_baris = $_POST["barism2"];
	$m2_kolom = $_POST["kolomm2"];
	$operasi = $_POST["operasi"];
	
	if (!empty ($m1_baris) and !empty($m1_kolom) and 
		!empty ($m2_baris) and !empty ($m2_kolom)){
		
		$m1 = masukandatamatrix ("m1", 1, $_POST["m1"]);
		$m2 = masukandatamatrix ("m2", 2, $_POST["m2"]);
		
		if ($operasi == "jumlah"){
			$hitungmatrix = panjangjumlahmatrix($m1,$m2);
			$operasi ="operasi penjumlahan : <br />";
		}else{
			$hitungmatrix = penguranganmatrix($m1,$m2);
			$operasi ="operasi pengurangan <br />";
		}
			tampildatamatrix($m1,1);
			tampildatamatrix($m2,2);
			
		echo $operasi;
			tampildatamatrix($hitungmatrix,'hasil');
	}
}
?>
<?php
	// blok untuk mengambil data
	// yang dikirim form html page : listing3_12.php
	

	$m1_baris = $_POST["m1_baris"];
	$m1_kolom = $_POST["m1_kolom"];
	$m2_baris = $_POST["m2_baris"];
	$m2_kolom = $_POST["m2_kolom"];
	
	if (empty($m1_baris) and empty($m1_kolom) 
	and empty($m2_baris) and empty ($m2_kolom)){
		// jika user tidak memasukan ukuran matriks secara
		// explicit maka program secara defalult
		// akan menampilkan ukuran 2 x 2 .
		
		$m1_baris =2;
		$m1_kolom =2;
		$m2_baris =2;
		$m2_kolom =2; 
	}
?>
<html>
<head>
	<title> simple matrix </title>
</head>
<body>
	<?php if (isset ($_POST["button"]) and $_POST["button"] == "submit"){?>
	
		<form id="form1" name="form1" method="post" action="">
			<?php if (!isset($_POST["proses"]) and $_POST["proses"] !="form1"){?>
	<?php
	// membuat form tampilan 
	// untuk input matrixb
	buatvisualmatrix("m1",$m1_baris, $m1_kolom);
	buatvisualmatrix("m2",$m2_baris, $m2_kolom);
	?>
	
	<input type="submit" name="button"  id="button" value="submit" />
	<select name="operasi" id="operasi">
		<option value="jumlah" > penjumlahan </option>
		<option value="kurang" > pengurangan </option>
	</select>
	<input name="proses" type="hidden" id="proses" value="form1" />
	<?php }?>
	</form>
	<?php}?>
</body>
</html>