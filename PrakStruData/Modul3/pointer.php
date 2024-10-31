<?php
$a= 10;
$b= &$a;// $b merupakan referensi ke $q
echo "Nilai Awal A = 10 <br>";
echo "A = ", $a;// output : 10
echo "<br>";
echo "B = ", $b; // output 10
echo "<br>";
$b=20; // mengubah nilai melalui referensi
echo " Mengubah nilai melalui referensi";
echo " Mengubah nilai A melalui B = 20 <br>";
echo "A = ", $a;// output : 20
echo "<br>";
echo "B = ", $b; // output 20
echo "<br>";
?>