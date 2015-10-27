<?php

$dataarray = array(1=>"senin",2=>"selasa",3=>"rabu","kamis","jumat","sabtu","minggu" );

$kamis= $dataarray[4];
echo $kamis;
echo "<br />$dataarray[7]";
echo "<br /><br />";
//atau menggunakan foreach
foreach ($dataarray as $list=>$hari){
echo $hari . "<br />";
}

?>