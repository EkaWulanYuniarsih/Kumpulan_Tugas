<?php
// Class Pengguna sebagai superclass
class Pengguna {
    protected $nama;

    // Constructor untuk menginisialisasi atribut nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode aksesFitur, akan di-overriden oleh subclass
    public function aksesFitur() {
        echo "Pengguna umum mengakses fitur.<br>";
    }

    // Metode untuk mendapatkan nama
    public function getNama() {
        return $this->nama;
    }
}

// Class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna {
    private $mataKuliah;

    // Constructor untuk menginisialisasi nama dan mata kuliah
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama); // Memanggil constructor parent class
        $this->mataKuliah = $mataKuliah;
    }

    // Override metode aksesFitur untuk Dosen
    public function aksesFitur() {
        echo "Dosen " . $this->getNama() . " dapat mengakses fitur untuk mengelola nilai dan mata kuliah.<br>";
    }

    // Metode untuk mendapatkan mata kuliah
    public function getMataKuliah() {
        return $this->mataKuliah;
    }
}

// Class Mahasiswa yang mewarisi class Pengguna
class Mahasiswa extends Pengguna {
    private $nim;

    // Constructor untuk menginisialisasi nama dan nim
    public function __construct($nama, $nim) {
        parent::__construct($nama); // Memanggil constructor parent class
        $this->nim = $nim;
    }

    // Override metode aksesFitur untuk Mahasiswa
    public function aksesFitur() {
        echo "Mahasiswa " . $this->getNama() . " dapat mengakses fitur untuk melihat nilai dan jadwal kuliah.<br>";
    }

    // Metode untuk mendapatkan NIM
    public function getNim() {
        return $this->nim;
    }
}

// Instansiasi objek dari class Dosen
$dosen1 = new Dosen("Prih Diantoro Abda'u", "Pemrograman Web");

// Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa("Anastasya Putri", "123456789");

// Memanggil metode aksesFitur dari objek Dosen
$dosen1->aksesFitur();

// Memanggil metode aksesFitur dari objek Mahasiswa
$mahasiswa1->aksesFitur();
?>