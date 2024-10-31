<?php
// Class Parent Kalkulator
// Kelas induk 'Kalkulator' mendefinisikan struktur dasar untuk kalkulator dengan dua angka.
abstract class Kalkulator {
    protected $angka1;
    protected $angka2;

    // Konstruktor untuk inisialisasi nilai
    // Konstruktor menerima dua argumen dan menginisialisasi variabel 'angka1' dan 'angka2'.
    public function __construct($angka1, $angka2) {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
    }

    // Method hitung() akan di-override oleh subclass
    // Metode ini bersifat umum dan akan di-override oleh metode di kelas turunan.
    public function hitung() {
        return 0; // Nilai default, tidak melakukan operasi apapun.
    }
}

// Subclass Penjumlahan
// Subclass ini mewarisi Kalkulator dan mengimplementasikan metode hitung() untuk operasi penjumlahan.
class Penjumlahan extends Kalkulator {
    public function hitung() {
        return $this->angka1 + $this->angka2; // Mengembalikan hasil penjumlahan angka1 dan angka2.
    }
}

// Subclass Pengurangan
// Subclass ini mewarisi Kalkulator dan mengimplementasikan metode hitung() untuk operasi pengurangan.
class Pengurangan extends Kalkulator {
    public function hitung() {
        return $this->angka1 - $this->angka2; // Mengembalikan hasil pengurangan angka1 dengan angka2.
    }
}

// Subclass Perkalian
// Subclass ini mewarisi Kalkulator dan mengimplementasikan metode hitung() untuk operasi perkalian.
class Perkalian extends Kalkulator {
    public function hitung() {
        return $this->angka1 * $this->angka2; // Mengembalikan hasil perkalian angka1 dan angka2.
    }
}

// Subclass Pembagian
// Subclass ini mewarisi Kalkulator dan mengimplementasikan metode hitung() untuk operasi pembagian.
class Pembagian extends Kalkulator {
    public function hitung() {
        // Mengecek apakah angka2 tidak nol agar terhindar dari error "division by zero".
        if ($this->angka2 != 0) {
            return $this->angka1 / $this->angka2; // Mengembalikan hasil pembagian angka1 dengan angka2.
        } else {
            // Jika angka2 bernilai nol, lemparkan exception.
            throw new Exception("Tidak dapat membagi dengan nol!");
        }
    }
}

// Main program
try {
    // Membuat objek dari masing-masing subclass dengan angka1 = 10 dan angka2 = 5
    $penjumlahan = new Penjumlahan(25, 5);
    $pengurangan = new Pengurangan(25, 5);
    $perkalian = new Perkalian(25, 5);
    $pembagian = new Pembagian(25, 5);
    
    // Menampilkan hasil perhitungan menggunakan konsep polymorphism
    echo "Kalkulator Sederhana dengan Konsep Polymorphism.<br><br>";
    echo "Hasil Penjumlahan: " . $penjumlahan->hitung() . "<br><br>";
    echo "Hasil Pengurangan: " . $pengurangan->hitung() . "<br><br>";
    echo "Hasil Perkalian: " . $perkalian->hitung() . "<br><br>";
    echo "Hasil Pembagian: " . $pembagian->hitung() . "<br><br>";
    
} catch (Exception $e) {
    // Menangkap exception jika terjadi kesalahan (contohnya pembagian dengan nol).
    echo 'Error: ' . $e->getMessage();
}
?>
