<?php
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function aksesFitur() {
        return "Akses fitur umum" ."<br>";
    }
}

class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function aksesFitur() {
        return "Dosen $this->nama mengakses fitur dosen" ."<br>";
    }
}

class Mahasiswa extends Pengguna {
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        parent::__construct($nama);
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function aksesFitur() {
        return "Mahasiswa $this->nama mengakses fitur mahasiswa";
    }
}

$dosen1 = new Dosen("Dr. Andi", "Pemrograman Web");
echo $dosen1->aksesFitur(); // Output: Dosen Dr. Andi mengakses fitur dosen

$mahasiswa1 = new Mahasiswa("Budi Santoso", "123456", "Informatika");
echo $mahasiswa1->aksesFitur(); // Output: Mahasiswa Budi Santoso mengakses fitur mahasiswa
?>