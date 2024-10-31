<?php
// Kelas Person (Super Class)
class Person {
    // Atribut yang dimiliki oleh semua kelas turunan
    protected $nama;

    // Constructor untuk menginisialisasi nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode getRole akan di-override di kelas turunan
    public function getRole() {
        return "Peran tidak diketahui";
    }

    // Getter untuk nama
    public function getNama() {
        return $this->nama;
    }
}

// Kelas Dosen yang mewarisi dari kelas Person
class Dosen extends Person {
    // Encapsulation untuk atribut NIDN
    private $nidn;

    // Constructor untuk menginisialisasi nama dan NIDN
    public function __construct($nama, $nidn) {
        parent::__construct($nama); // Memanggil constructor kelas induk
        $this->nidn = $nidn;
    }

    // Polymorphism: Override metode getRole
    public function getRole() {
        return "Dosen";
    }

    // Getter untuk NIDN (Encapsulation)
    public function getNidn() {
        return $this->nidn;
    }

    // Setter untuk NIDN (Encapsulation)
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
}

// Kelas Mahasiswa yang mewarisi dari kelas Person
class Mahasiswa extends Person {
    // Encapsulation untuk atribut NIM
    private $nim;

    // Constructor untuk menginisialisasi nama dan NIM
    public function __construct($nama, $nim) {
        parent::__construct($nama); // Memanggil constructor kelas induk
        $this->nim = $nim;
    }

    // Polymorphism: Override metode getRole
    public function getRole() {
        return "Mahasiswa";
    }

    // Getter untuk NIM (Encapsulation)
    public function getNim() {
        return $this->nim;
    }

    // Setter untuk NIM (Encapsulation)
    public function setNim($nim) {
        $this->nim = $nim;
    }
}

// Kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul;

    // Constructor untuk menginisialisasi judul jurnal
    public function __construct($judul) {
        $this->judul = $judul;
    }

    // Metode abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function submitJurnal();
}

// Kelas JurnalDosen yang mewarisi dari Jurnal
class JurnalDosen extends Jurnal {
    private $nidn;

    // Constructor untuk menginisialisasi judul jurnal dan NIDN dosen
    public function __construct($judul, $nidn) {
        parent::__construct($judul);
        $this->nidn = $nidn;
    }

    // Implementasi metode abstrak submitJurnal
    public function submitJurnal() {
        return "Jurnal dosen dengan judul '" . $this->judul . "' telah disubmit oleh dosen dengan NIDN: " . $this->nidn;
    }
}

// Kelas JurnalMahasiswa yang mewarisi dari Jurnal
class JurnalMahasiswa extends Jurnal {
    private $nim;

    // Constructor untuk menginisialisasi judul jurnal dan NIM mahasiswa
    public function __construct($judul, $nim) {
        parent::__construct($judul);
        $this->nim = $nim;
    }

    // Implementasi metode abstrak submitJurnal
    public function submitJurnal() {
        return "Jurnal mahasiswa dengan judul '" . $this->judul . "' telah disubmit oleh mahasiswa dengan NIM: " . $this->nim;
    }
}

// Contoh Penggunaan (Main Program)

// Membuat objek dari kelas Dosen
$dosen1 = new Dosen("Dr. Handoko", "123456789");
echo $dosen1->getNama() . " adalah seorang " . $dosen1->getRole() . " dengan NIDN: " . $dosen1->getNidn() . "<br><br>";

// Membuat objek dari kelas Mahasiswa
$mahasiswa1 = new Mahasiswa("Bima", "210987654");
echo $mahasiswa1->getNama() . " adalah seorang " . $mahasiswa1->getRole() . " dengan NIM: " . $mahasiswa1->getNim() . "<br><br>";

// Membuat objek dari kelas JurnalDosen
$jurnalDosen1 = new JurnalDosen("Studi Kasus PHP OOP", "123456789");
echo $jurnalDosen1->submitJurnal() . "<br><br>";

// Membuat objek dari kelas JurnalMahasiswa
$jurnalMahasiswa1 = new JurnalMahasiswa("Implementasi Polimorphishm", "210987654");
echo $jurnalMahasiswa1->submitJurnal() . "<br><br>";
?>
