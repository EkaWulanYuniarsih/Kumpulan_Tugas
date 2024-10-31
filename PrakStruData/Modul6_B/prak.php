<?php
// Deklarasi node
$node = array(
    'data' => null,
    'next' => null
);
$head = null;
$tail = null;

// Prosedur inisialisasi
function inisialisasi()
{
    global $head, $tail;
    $head = null;
    $tail = null;
}

// Fungsi LEmpty
function LEmpty($head)
{
    if ($head == null)
        return 1;
    else
        return 0;
}

// Prosedur menyisipkan data ke dalam link list (depan)
function InsertD($d)
{
    global $head, $tail;
    $baru = array(
        'data' => $d,
        'next' => null
    );
    if (LEmpty($head) == 1) {
        $head = $baru;
        $tail = $baru;
    } else {
        $baru['next'] = $head;
        $head = $baru;
    }
}

// Prosedur menyisipkan data ke dalam link list (belakang)
function InsertB($d)
{
    global $head, $tail;
    $baru = array(
        'data' => $d,
        'next' => null
    );
    if (LEmpty($head) == 1) {
        $head = $baru;
        $tail = $baru;
    } else {
        $tail['next'] = $baru;
        $tail = $baru;
    }
}

// Prosedur untuk melakukan hapus depan link list
function HapusD()
{
    global $head, $tail;
    if (LEmpty($head) == 0) {
        if ($head['next'] != null) {
            $temp = $head;
            $head = $head['next'];
            unset($temp);
        } else {
            $head = null;
            $tail = null;
        }
    } else {
        echo "<br>List Kosong";
    }
}

// Prosedure hapus belakang Link LIst
function HapusB()
{
    global $head, $tail;
    if (LEmpty($head) == 0) {
        if ($head['next'] != null) {
            $temp = $head;
            while ($temp['next']['next'] != null) {
                $temp = $temp['next'];
            }
            $temp['next'] = null;
            $tail = $temp;
            $hapus = $temp['next'];
            unset($hapus);
        } else {
            $head = null;
            $tail = null;
        }
    } else {
        echo "<br>List kosong";
    }
}

// Prosedur hapus semua elemen link list
function clear()
{
    global $head, $tail;
    $temp = $head;
    $del = null;
    while ($temp != null) {
        $del = $temp;
        $temp = $temp['next'];
        unset($del);
    }
    $head = null;
    $tail = null;
}

// Prosedur cetak elemen link list
function cetak()
{
    global $head, $tail;
    $temp = $head;
    if (LEmpty($head) == 0) {
        echo "<hr>Cetak data </hr>";
        while ($temp != null) {
            echo $temp['data'], " ";
            $temp = $temp['next'];
        }
    } else
        echo "<br>List Kosong";
}

// Inisialisasi
inisialisasi();

// Menambahkan data
InsertD(11);
InsertB(12);
InsertB(13);

// Menampilkan data sebelum penghapusan
echo "<br>Cetak data : ";
cetak();

// Menghapus data depan
HapusD();
echo "<br>Cetak data : ";
cetak();

// Menghapus data belakang
HapusB();
echo "<br>Cetak data : ";
cetak();
?>