<?php
function pangkat($nilai, $pangkat=2)
{
   $hasil=1;
   for ($i=1;$i<=$pangkat;$i++)
   {
      $hasil=$hasil*$nilai;
   }
   return $hasil;
}
 
//Test beberapa kasus inputan untuk fungsi pangkat()
echo "pangkat(10) = ".pangkat(5);
echo "<br />";
echo "pangkat(3) = ".pangkat(3);
echo "<br />";
echo "pangkat(2,8) = ".pangkat(2,8);
echo "<br />";
echo "pangkat(3.5,3) = ".pangkat(3.5,3);
echo "<br />";
?>