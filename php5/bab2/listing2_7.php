<?php

echo "contoh pertama : <br />";
$nilaiawal = 1;
$nilaibatas =20;

for ($nilaiawal;$nilaiawal <=$nilaibatas;$nilaiawal++){

	echo "nilai ke $nilaiawal";
	echo "<br />";
}

echo " contoh kedua : <br />";
for ($baris = 1; $baris <= 5; $baris++)

{
	for ($kolom =1;$kolom <=6; $kolom++)
{
	echo "[" . $baris . " , " . $kolom ."]";
	echo "&nbsp;&nbsp;";
}
	echo "<br />";
}
	?>