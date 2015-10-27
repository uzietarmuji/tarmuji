<?php
	$text ="  \t\t\tHalo ... saya akan melakukan
				trim data . \t .......";
	echo trim ($text);
	echo "<br />";
	echo trim ($text, "\t.");
	
	//trim dengan array
	$data = array ("\t\tpisang", "    jagung   ", " ... mangga ....");
	
	function trimdata ($value)
	{
		return trim ($value, ". .\t");
	}
	
	foreach ($data as $value){
		echo "<br />";
		echo trimdata($value);
	}
?>