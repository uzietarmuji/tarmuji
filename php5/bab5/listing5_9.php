<?php
	function hitungantampilan ($awalnilai=1, $akhirnilai=10)
	{
		echo "nilai =";
		for ($awalnilai;$awalnilai <= $akhirnilai; $awalnilai++)
		{
			echo $awalnilai;
			echo " ";
		}
		echo "<br />";
	}
	
	//menampilkan data
	hitungantampilan();
	hitungantampilan(5);
	hitungantampilan(30,50);
	
?>