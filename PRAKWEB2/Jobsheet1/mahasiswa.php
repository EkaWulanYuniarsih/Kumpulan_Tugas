<?php
// Membuat kelas Mahasiswa dengan atribut publik: nama, nim, dan jurusan
class Mahasiswa {
    public $nama;     // Atribut untuk menyimpan nama mahasiswa
    public $nim;      // Atribut untuk menyimpan NIM mahasiswa
    public $jurusan;  // Atribut untuk menyimpan jurusan mahasiswa

    // Constructor untuk menginisialisasi atribut ketika objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        // Mengatur nilai awal dari atribut nama, nim, dan jurusan
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        // Menampilkan nama, NIM, dan jurusan dari objek mahasiswa
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br><br>";
    }

    // Metode untuk memperbarui jurusan mahasiswa
    public function updateJurusan($jurusanBaru) {
        // Mengganti nilai atribut jurusan dengan nilai baru yang diterima sebagai parameter
        $this->jurusan = $jurusanBaru;
    }

    // Metode untuk mengubah NIM mahasiswa (setter)
    public function setNim($nimBaru) {
        // Mengganti nilai atribut NIM dengan NIM baru yang diterima sebagai parameter
        $this->nim = $nimBaru;
    }
}

// Membuat objek Mahasiswa
// Membuat objek dari kelas Mahasiswa dengan nilai awal nama, nim, dan jurusan
$mahasiswa1 = new Mahasiswa("Risma", "12345678", "Teknik Informatika");

// Memanggil metode tampilkanData untuk menampilkan data mahasiswa
$mahasiswa1->tampilkanData();

// Menggunakan metode updateJurusan untuk mengganti jurusan mahasiswa
$mahasiswa1->updateJurusan("Sistem Informasi");
// Memanggil kembali tampilkanData untuk menampilkan data mahasiswa yang sudah diperbarui
$mahasiswa1->tampilkanData();

// Menggunakan metode setNim untuk mengganti NIM mahasiswa
$mahasiswa1->setNim("87654321");
// Memanggil tampilkanData untuk menampilkan data mahasiswa dengan NIM yang sudah diperbarui
$mahasiswa1->tampilkanData();
?>
