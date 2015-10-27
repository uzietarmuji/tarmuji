<?php
$gengwiny = array (1=>"winny","ewin","nanda","hoxy","ade","via","lia","andrila");

	while (list($anggota,$nama) = each($gengwiny)){
		echo $anggota ."=" .$nama;
		echo ", ";
	}
?>