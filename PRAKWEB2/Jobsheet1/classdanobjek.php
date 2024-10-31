<?php
// Definisikan class Mahasiswa
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Buat metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}

// Buat objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Alvira";
$mahasiswa1->nim = "12345678";
$mahasiswa1->jurusan = "Komputer dan Bisnis";

// Tampilkan data mahasiswa
$mahasiswa1->tampilkanData();
?>