<?php

//SINGGLE LINK LIST NON CIRCULAR DENGAN HEAD
//Deklarasi LINK LIST
$node = array(
    'data' => null,
    'next' => null
);

$head = null;

//Prosedur inisialisasi
function inisialisasi()//penetapan nilai awal untuk objek data atau variabel
{
    global $head;
    $head = null;
}

//Fungsi LEmpty
function LEmpty($head)// menentukan kosong atau tidaknya suatu vaariabel
{
    if ($head == null)
        return 1;
    else
        return 0;
}

//Procedure menyisipkan data ke dalam Link List (depan)
function InsertD ($d)
{   global $head;
    $baru = array(// menamai variabel array dengan nama variabel baru
        'data' => $d,
        'next' => null
    );
if (LEmpty($head) == 1)// melakukan perulangan if else
    {
        $head = $baru;
        $head['next'] = NULL;
    }   
    else{
        $baru['next'] = $head;
        $head = $baru;
    }
}

//Prosedur tambah data link list (belakang)
function InsertB($d)
{   global $head;
    $baru = array(
        'data' => $d,
        'next' => null
    );

    if ($head === null) {
        $head = $baru;
    } else {
        $temp = $head;
        while ($stemp['next'] != null){
            $temp = $temp['next'];
        }
        $temp['next'] = $baru;
    
    }

}

//Prosedur untuk melakukan hapus depan link list
function HapusD()
{   global $head;
    if (LEmpty($head) == 0)
    {
        if ($head['next'] != null)
        {
            $temp = $head;
            $head = $head['next'];
            unset ($temp);
        }
        else
        {
            $heaad = null;
        }
    }
    else
    {
        echo "<br>List Kosong";
    }
}

//Prosedur hapus belakang link list
function HapusB()
{   global $heaad;
    if (LEmpty($head) == 0)
    {
        if ($head['next']!= null)
        {
            $temp = $head;
            while ($temp['next']['next'] != null)
            {$temp = $temp['next']; }
            $temp ['next'] = null;
            $hapus = $temp['next'];
            unset ($hapus);
        }
        else
        {$head = null;}
    }
    else
    {echo "<br>List Kosong";}
}

//Prosedur hapus semua elemen link list
function clear()
{   global $head;
    $temp = $heaad;
    $del = null;
    while ($temp != null)
{
    $del = $temp;
    $temp = $temp['next'];
    unset ($del);
}
$head = null;
}
// prosedur cetak elemen link list
function cetak()
{
    global $head;
    $temp = $head;
    if (LEmpty($head) == 0)
    {
        echo "<hr> Cetak data </br>";
        while ($temp !=null)
        {
            echo $temp['data']," ";
            $temp = $temp['next'];
        }
    }
    else
    echo "<br> List Kosong";
}
InsertB(44);// memasukkan nilai 44
InsertD(55);// memasukkan nilai 55
InsertD(66);// memasukkan nilai 66
echo "Isi link list :";// menampilkan tulisan Isi link list
cetak();// melakukan proses pencetakan
HapusD();// melakukan proses penghapusan data D
echo "<p> Setelah hapus</p>";// menampilkan tulisanseteh dihapus
cetak();// melakukan proses pencetakan
HapusD();// melakukan proses penghapusan data D
cetak();// melakukan proses pencetakan
?>