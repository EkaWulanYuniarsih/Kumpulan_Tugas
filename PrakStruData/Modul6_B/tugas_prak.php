<?php
echo "<h2>Single Link List Non Circular dengan HEAD dan TAIL</h2><br><hr>";
// Inisialisasi struktur data
$data = [];

// Fungsi untuk menyisipkan data di depan
function InsertD($item) {
    global $data;
    array_unshift($data, $item);
}

// Fungsi untuk menyisipkan data di belakang
function InsertB($item) {
    global $data;
    array_push($data, $item);
}

// Fungsi untuk menghapus data di depan
function HapusD() {
    global $data;
    array_shift($data);
}

// Fungsi untuk menghapus data di belakang
function HapusB() {
    global $data;
    array_pop($data);
}

// Prosedur untuk mencetak data
function Cetak() {
    global $data;
    foreach ($data as $item) {
        echo $item . " ";
    }
}

// Penyisipan data
InsertD(11);
InsertB(12);
InsertB(13);

echo "Cetak data : ";
Cetak();
echo "<br>";

// Penghapusan data
HapusD();
echo "Cetak data : ";
Cetak();
echo "<br>";

HapusB();
echo "Cetak data : ";
Cetak();
echo "<br>";
?>
