<?php
$array = [1, 2, 3, 4, 5];// membuat array
$referensi_array = &$array;// membuat referensi ke array
$referensi_array[0] = 10;// mengubah nilai array melalui referensi 
echo " Menampilkan nilai array asli<br>";
print_r($array);// nampilkan output nilai array asli
echo "<br>";
echo "Menampilkan isi array index ke 0 melalui pointer = ", $referensi_array[0]."<br>";
for ($i=0; $i < count($referensi_array); $i++)
{echo $referensi_array [$i]. "";}
?>