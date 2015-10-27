<?php
	
	$desimal =102030;	//integer
	var_dump($desimal);
	
	echo "<br />";
	$okta =0560; 	// oktadesimal
	var_dump($okta);
	
	echo "<br />";
	$hexa = 0x5f;		//hexadesimal
	var_dump($hexa);
	
	// tampilan data sebenarnya
	$format_okta ="<br /> ocatdecimal 0%o = $okta decimal";
	$format_hexa ="<br /> hexadecimal 0%o = $hexa decimal";
	printf ($format_okta, $okta);
	printf ($format_hexa, $hexa);
?>