<?php
// Definisikan class Mahasiswa dengan setter untuk NIM
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

    // Metode untuk mengubah NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }

    // Metode untuk mengubah jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
}

// Buat objek dengan menggunakan constructor
$mahasiswa1 = new Mahasiswa("Alvira", "12345678", "Komputer dan bisnis");

// Ubah NIM menggunakan metode setNim
$mahasiswa1->setNim("87654321");

// Tampilkan data mahasiswa yang sudah diubah
$mahasiswa1->tampilkanData();
?>