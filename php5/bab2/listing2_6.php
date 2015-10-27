<?php

	$nilaiakhir = 67.56;
	$nilaimahasiswa =round($nilaiakhir);
	
	switch ($nilaimahasiswa)
	{
		case ($nilaimahasiswa > 95) :
			$nilaidalamangka = "A";
			$statuskelulusan = "lulus";
			$keteranganstudi = "lanjutkan kuliah";
		break;
		case ($nilaimahasiswa <= 96 && $nilaimahasiswa >=90) :
			$nilaidalamangka = "A-";
			$statuskelulusan = "lulus";
			$keteranganstudi ="lanjutkan kuliah";
		break;
		case ($nilaimahasiswa <=89 && $nilaimahasiswa >= 85 ):
			$nilaidalamangka ="B+";
			$statuskelulusan ="lulus";
			$keteranganstudi ="lanjutkan kuliah";
		break;
		case ($nilaimahasiswa <= 84 && $nilaimahasiswa >= 80) :
			$nilaidalamangka = "B";
			$statuskelulusan = "lulus";
			$keteranganstudi ="lanjutkan kuliah";
		break;
		case ($nilaimahasiswa <= 79 && $nilaimahasiswa >= 75) :
			$nilaidalamangka = "B-";
			$statuskelulusan = "lulus";
			$keteranganstudi = "lanjutkan kuliah";
		break;
		case ($nilaimahasiswa <= 74 && $nilaimahasiswa >= 70) :
			$nilaidalamangka = "C+";
			$statuskelulusan = "lulus";
			$keteranganstudi = "lanjutkan kuliah";
		break;
		case ($nilaimahasiswa <= 69 && $nilaimahasiswa >= 65 ) :
			$nilaidalamangka = "C";
			$statuskelulusan ="lulus";
			$keteranganstudi ="lanjutkan kuliah";
		break;
		case ($nilaimahasiswa <=64 && $nilaimahasiswa >= 60) :
			$nilaidalamangka = "C-";
			$statuskelulusan = "tidak lulus";
			$keteranganstudi = "bersarat berikutnya";
		break;
		case ($nilaimahasiswa <= 59 && $nilaimahasiswa >= 55) :
			$nilaidalamangka = "D+";
			$statuskelulusan = "tidak lulus";
			$keteranganstudi = "mengulang tahun depan";
		break;
		case ($nilaimahasiswa <= 54 && $nilaimahasiswa >= 50) :
			$nilaidalamangka ="D";
			$statuskelulusan ="tidak lulus";
			$keteranganstudi ="mengulang tahun depan";
		break;
		case ($nilaimahasiswa <= 49 && $nilaimahasiswa >= 45) :
			$nilaidalamangka = "D-";
			$statuskelulusan = "tidak lulus";
			$keteranganstudi = "mengulang tahun depan";
		break;
		case ($nilaimahasiswa < 45) :
			$nilaimahasiswa = "F";
			$statuskelulusan = "tidak lulus";
			$keteranganstudi = "mengulang tahun depan";
		break;	
	}
	
	echo "hasil studi mahasiswa : " . "<br />";
	echo "hasil studi = " . $nilaimahasiswa;
	echo "<br />";
	echo "nilai akhir = " . $nilaidalamangka;
	echo "<br />";
	echo "status kelulusan = " . $statuskelulusan;
	echo "<br />";
	echo "keterangan studi = " . $keteranganstudi;

?>