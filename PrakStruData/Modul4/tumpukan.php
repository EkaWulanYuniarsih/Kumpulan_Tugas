<?php
echo "STACK / TUMPUKAN";
$tumpukan = array(// melakukan deklarasi strack
    'top' => -1,// inisialisasi top dengan nilai -1
    'data' => array()// array yang digunakan untuk menampung data
);
$A = $tumpukan;// mengganti / memberi nama inisial
define("max",10);
function inisial()
{
    global $A; // menggunakan variabel global $A
    $A ['top'] = -1;// menginisialisasi top dengan nilai -1
}
function push ($d)// fungsi push untuk menambahkan data pada stack
{
    global $A;// menggunakan variabel global $A
    if ($A['top'] != max -1) {
        $A['top'] = $A['top'] + 1;
        $A['data'][$A['top']] = $d;// menambahkan data ke dalam strack
        echo "<br/> Nilai ", $d, "sudah ditambahkan";// pesan untuk melakukan konfirmasi penambahan
    } else{
        echo "<br/>Maaf elemen stack sudah penuh"; // pesan yang muncul jika strack penuh
    }
}
function pop ()// presedur pop untuk mengambil data stack
{
    global $A;// menggunakan variable global $A
    if ($A ['top'] != -1){
        echo "<br> Data yang di POP adalah ", $A['data'] [$A['top']];
        $A['top']--;
    }else {
        echo "<br> maaf stack kosong"; // pesan jika strack kosong
    }
}
function peak ()// fungsi menampilkan data teratas / PEAK
{global $A;
    return $A ['data'] [$A['top']];
}
function cetak()
{
    global $A;// penggunaakn variabel global $A
    if ($A['top'] != -1)
    {
        echo "<br> Data pada stack =";
        for ($i=$A['top']; $i>=0; $i--)
        echo "<br>".$A ['data'][$i];
    }
}
//memanggil atau menjalankan prosedur dan fungsi
push(10);// contoh penambahan angka 10 kedalam stack
push(5);// contoh penambahan angka 5 kedalam stack
push(3);// contoh penambahan angka 3 kedalam stack
push (4);// contoh penambahan angka 4 kedalam stack
pop();// melakukan penghapusan dari stack
echo "<br> Data teratas =",peak();// menampilkan data teratas
cetak();
?>