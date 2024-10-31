<?php
// Definisikan class Dosen dengan metode tampilkanDosen
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    // Constructor untuk inisialisasi atribut
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk menampilkan data dosen
    public function tampilkanDosen() {
        echo "Nama Dosen: " . $this->nama . "<br>";
        echo "NIP: " . $this->nip . "<br>";
        echo "Mata Kuliah: " . $this->mataKuliah . "<br>";
    }
}
// Buat objek dengan menggunakan constructor
$dosen1 = new Dosen("Prih Diantoro Abda`u", "19765432", "Pemrograman Web");
// Tampilkan dosen
$dosen1->tampilkanDosen();
?>
