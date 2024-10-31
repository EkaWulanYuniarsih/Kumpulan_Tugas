<?php
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Getter dan setter untuk atribut nama
    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter dan setter untuk atribut nim
    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Getter dan setter untuk atribut jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

// Instansiasi objek Mahasiswa
$mahasiswa1 = new Mahasiswa("Budi", "123456", "Informatika");
echo $mahasiswa1->getNama(); // Mengakses nama menggunakan metode getter
?>