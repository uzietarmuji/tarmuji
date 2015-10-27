<?php
	function ceknilai($nilai=null)
	{
		if (is_int($nilai)) {$des = "nilai integer <br />";}
		if (is_float($nilai)) {$des = "nilai float <br />";}
		if (is_bool($nilai)) {$des = "nilai boolean <br />";}
		if (is_null($nilai)) {$des = "nilai null <br />";}
		if (is_numeric($nilai)) {$des = "nilai numeric <br />";}
		if (is_string($nilai)) {$des = "nilai string <br />";}
		return $des;
	}
		$bool = false;
		echo ceknilai(45);
		echo ceknilai($bool);
		echo ceknilai();
		echo ceknilai("halo");
?>