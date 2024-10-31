<?php
// Definisi kelas Mahasiswdan Matkul
class Matkul {
    public $kode;// menyimpan data kode
    public $nama;//menyimpan data nama
    public $sks;// menyimpan data sks
    public $semester;// menyimpan data semester

    function __construct($nama, $sks, $semester, $prodi, $jenis, $no_urut_matkul) {
        $this->nama = $nama;
        $this->sks = $sks;
        $this->semester = $semester;
        $this->kode = $prodi . $semester . $jenis . $no_urut_matkul;
    }// fungsi kontruksi inisialisasi  data
}

session_start(); // wadah menyimpan data mata kuliah

// Simpan data matkul ke dalam sesi
if (!isset($_SESSION['matkul'])) {
    $_SESSION['matkul'] = array();
}

// Handler untuk input data mata kuliah
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nama_matkul']) && isset($_POST['sks'])) {
    $nama_matkul = $_POST['nama_matkul'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    $prodi = $_POST['prodi'];
    $jenis = $_POST['jenis'];
    $no_urut_matkul = $_POST['no_urut_matkul'];

    $matkul_baru = new Matkul($nama_matkul, $sks, $semester, $prodi, $jenis, $no_urut_matkul);
    array_push($_SESSION['matkul'], $matkul_baru);
}

function hapusMatkul($kode) {// fungsi untuk menghapus data matakuliah
    foreach ($_SESSION['matkul'] as $key => $matkul) {
        if ($matkul->kode == $kode) {
            unset($_SESSION['matkul'][$key]);
            break;
        }
    }
}

// Implementasi hapus data berdasarkan input
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['hapus_kode'])) {
    hapusMatkul($_POST['hapus_kode']);
}

function cetakMatkul() {// fungsi mencetak mata kuliah
    echo '<h2>Data Mata Kuliah</h2>';
    echo '<table border="1">';
    echo '<tr><th>Kode</th><th>Nama</th><th>SKS</th><th>Semester</th></tr>';
    foreach ($_SESSION['matkul'] as $matkul) {
        echo '<tr>';
        echo '<td>' . $matkul->kode . '</td>';// cetak kode
        echo '<td>' . $matkul->nama . '</td>';// cetak nama
        echo '<td>' . $matkul->sks . '</td>';// cetak sks
        echo '<td>' . $matkul->semester . '</td>';// cetak semester
        echo '</tr>';
    }
    echo '</table>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <center><h1>SISTEM AKADEMIK POLITEKNIK NEGERI CILACAP</h1></center>
    <!-- cetak sistem akademik politeknik negeri cilaacap -->
    <center><h2>MENU UTAMA</h2></center>
    <!-- cetak menu utama -->
    <form method="post" action="">
    <center><button name="menu" value="1">1. Input Data Mata Kuliah</button><br><br></center>
    <center><button name="menu" value="2">2. Hapus Data Mata Kuliah</button><br><br></center>
    <center><button name="menu" value="3">3. Cetak Data Mata Kuliah</button><br><br></center>
    <center><button name="menu" value="4">4. Keluar</button><br><br></center>
    </form>
<!-- memunculkan button untuk proses input, hapus, cetak dan keluar -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $menu = $_POST['menu'];

        switch ($menu) {
            // melakukan perulangan switch
            case 1:
                echo '<h2>INPUT DATA MATA KULIAH</h2>';
                echo '<form method="post" action="">';
                echo 'No. Urut Matkul: <input type="text" name="no_urut_matkul"><br><br>';// input nomor urut
                echo 'Nama Matkul: <input type="text" name="nama_matkul"><br><br>';// menginputkan nama matkul
                echo 'SKS: <input type="text" name="sks"><br><br>';// menginputkan sks
                echo 'Semester: <input type="text" name="semester"><br><br>';// menginputkan semester
                echo 'Prodi: 
                    <select name="prodi">
                        <option value="01">D3 Teknik Informatika</option>
                        <option value="02">D3 Teknik Elektro</option>
                        <option value="03">D3 Teknik Mesin</option>
                        <option value="04">D3 Teknik Listrik</option>
                        <option value="05">D4 Teknik Pengendalian Pencemaran Lingkungan</option>
                        <option value="06">D4 Pengembangan Produk Agroindustri</option>
                    </select><br><br>';// seleksi dalam memilih prodi
                echo 'Teori/Praktek: 
                    <select name="jenis">
                        <option value="t">Teori</option>
                        <option value="p">Praktek</option>
                    </select><br><br>';//pemilihan opsi jenis mata kuliah
                echo 'Apakah ingin menambah data matkul lagi Y/T ? <input type="text" name="tambah_matkul"><br><br>';
                echo '<input type="submit" value="Submit">';// button untuk menyimpan 
                echo '</form>';
                break;
            case 2:
                echo '<h2>HAPUS DATA MATA KULIAH</h2>';
                echo '<form method="post" action="">';
                echo 'Kode Matkul: <input type="text" name="hapus_kode"><br><br>';
                echo '<input type="submit" value="Hapus">';
                echo '</form>';
                break;// menghapus data matakuliah
            case 3:
                cetakMatkul();// mencetak matakuliah
                break;
            case 4:
                exit();// perulangan untuk kembali
        }
    }
    ?>
</body>
</html>
