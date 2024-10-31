<?php
class Pengguna {
    protected $nama;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode untuk mendapatkan nama
    public function getNama() {
        return $this->nama;
    }
}

class Dosen extends Pengguna {
    private $mataKuliah;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama); // Memanggil constructor kelas induk
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk mendapatkan mata kuliah
    public function getMataKuliah() {
        return $this->mataKuliah;
    }
}

// Instansiasi objek Dosen
$dosen1 = new Dosen("Dr. Susi", "Pemrograman Web");
echo $dosen1->getNama() . ", Mata Kuliah: " . $dosen1->getMataKuliah(); // Menampilkan data dosen
?>