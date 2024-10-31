<?php
//QUEUE/ANTRIAN
define("MAX", 6);

// Deklarasi antrian
$antrian = array(
    'head' => -1,
    'tail' => -1,
    'data' => array()
);
$Q = $antrian;

// Prosedur untuk inisialisasi antrian
function inisialisasi()
{
    global $Q;
    $Q['head'] = $Q['tail'] = -1;
}

// Prosedur untuk menambah elemen pada antrian (Enqueue)
function enqueue($d)
{
    global $Q;
    if (isFull() == 0) {
        if ($Q['tail'] == -1) {
            $Q['head'] = $Q['tail'] = 0;
        } else {
            $Q['tail']++;
        }
        $Q['data'][$Q['tail']] = $d;
    } else {
        echo "<br>Maaf Antrian sudah penuh";
    }
}

// Prosedur untuk mengambil elemen dari antrian (Dequeue)
function dequeue()
{
    global $Q;
    if (isEmpty() != 1) {
        echo "<br>Data yang keluar dari antrian : ", $Q['data'][$Q['head']];
        for ($i = $Q['head']; $i < $Q['tail']; $i++) {
            $Q['data'][$i] = $Q['data'][$i + 1];
        }
        $Q['tail']--;
        echo "<br>Data saat ini : ";
        cetak();
    }
}

// Fungsi untuk mengecek apakah antrian penuh
function isFull()
{
    global $Q;
    if ($Q['tail'] == MAX - 1) {
        return 1; // True, penuh
    } else {
        return 0; // False, tidak penuh
    }
}

// Fungsi untuk mengecek apakah antrian kosong
function isEmpty()
{
    global $Q;
    if ($Q['tail'] == -1) {
        return 1;
    } else {
        return 0;
    }
}

// Prosedur untuk menghapus semua elemen dalam antrian
function clear()
{
    global $Q;
    $Q['head'] = $Q['tail'] = -1;
}

// Prosedur untuk mencetak elemen dalam antrian
function cetak()
{
    global $Q;
    if ($Q['tail'] != -1) {
        for ($i = $Q['head']; $i <= $Q['tail']; $i++) {
            echo "<br> Antrian ke ", $i + 1, " : ", $Q['data'][$i];
        }
    } else {
        echo "Antrian kosong";
    }
}

// Output atau tampilan program
echo "<br> Menambah data    :";
enqueue(11);
enqueue(22);
enqueue(33);
enqueue(44);
cetak();
dequeue();
cetak();
?>