<?php
// Definisikan class Mahasiswa dengan metode tambahan
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

    // Metode untuk mengubah jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
}

// Buat objek dengan menggunakan constructor
$mahasiswa1 = new Mahasiswa("Alvira", "12345678", "Komputer dan Bisnis");

// Ubah jurusan menggunakan metode updateJurusan
$mahasiswa1->updateJurusan("Sistem Informasi");

// Tampilkan data mahasiswa yang sudah diubah
$mahasiswa1->tampilkanData();
?>
