<?php
// Definisikan class Dosen dengan constructor
class Dosen {
    public $nama;
    public $nip;
    public $matakuliah;

    // Constructor untuk inisialisasi atribut
    public function __construct($nama, $nip, $matakuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah = $matakuliah;
    }

    // Buat metode untuk menampilkan data dosen
    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nip . "<br>";
        echo "Jurusan: " . $this->matakuliah . "<br>";
    }
}

// Buat objek dengan menggunakan constructor
$dosen1 = new Dosen("Prih Diantoro Abda`u", "19765432", "Pemrograman Web");

// Tampilkan data dosen
$dosen1->tampilkanData();
?>
