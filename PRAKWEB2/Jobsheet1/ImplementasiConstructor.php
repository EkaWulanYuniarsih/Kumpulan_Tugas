<?php
// Definisikan class Mahasiswa dengan constructor
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk inisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Buat metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}

// Buat objek dengan menggunakan constructor
$mahasiswa1 = new Mahasiswa("Alvira", "12345678", "Komputer dan Bisnis");

// Tampilkan data mahasiswa
$mahasiswa1->tampilkanData();
?>
