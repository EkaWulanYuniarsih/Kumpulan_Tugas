<?php
// Abstract class Pengguna yang mendefinisikan struktur dasar untuk pengguna
abstract class Pengguna {
    // Properti protected, bisa diakses oleh kelas turunan
    protected $nama;

    // Konstruktor untuk inisialisasi properti $nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Method abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function aksesFitur();
}

// Kelas Dosen yang mewarisi dari Pengguna
class Dosen extends Pengguna{
    // Properti khusus Dosen
    private $mataKuliah;

    // Konstruktor untuk inisialisasi properti $nama dan $mataKuliah
    public function __construct($nama, $mataKuliah) {
        // Memanggil konstruktor dari kelas induk (Pengguna)
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    // Implementasi method abstrak dari Pengguna
    public function aksesFitur() {
        // Mengembalikan string yang menunjukkan dosen mengakses fitur
        return "Dosen $this->nama mengakses fitur dosen untuk mata kuliah $this->mataKuliah.<br>";
    }
}

// Kelas Mahasiswa yang mewarisi dari Pengguna
class Mahasiswa extends Pengguna{
    // Properti khusus Mahasiswa
    private $nim;
    private $jurusan;

    // Konstruktor untuk inisialisasi properti $nama, $nim, dan $jurusan
    public function __construct($nama, $nim, $jurusan) {
        // Memanggil konstruktor dari kelas induk (Pengguna)
        parent::__construct($nama);
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Implementasi method abstrak dari Pengguna
    public function aksesFitur() {
        // Mengembalikan string yang menunjukkan mahasiswa mengakses fitur
        return "Mahasiswa $this->nama ($this->nim) dari jurusan $this->jurusan mengakses fitur mahasiswa.<br>";
    }
}

// Membuat objek Dosen
$dosen1 = new Dosen("Dr. Andi", "Pemrograman Web");
// Memanggil method aksesFitur() dan mencetak hasilnya
echo $dosen1->aksesFitur(); // Output: Dosen Dr. Andi mengakses fitur dosen untuk mata kuliah Pemrograman Web.

// Membuat objek Mahasiswa
$mahasiswa1 = new Mahasiswa("Budi Santoso", "123456", "Informatika");
// Memanggil method aksesFitur() dan mencetak hasilnya
echo $mahasiswa1->aksesFitur(); // Output: Mahasiswa Budi Santoso (123456) dari jurusan Informatika mengakses fitur mahasiswa.
?>
