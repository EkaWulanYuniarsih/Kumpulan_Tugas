<?php
// Memulai session untuk menyimpan data antrian secara sementara
session_start();

// Jika session 'antrian' belum ada, inisialisasi dengan array kosong
if (!isset($_SESSION['antrian'])) {
    $_SESSION['antrian'] = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu Antrian Nasabah</title>
</head>
<body>
    <h2>Menu Antrian Nasabah</h2><hr>
    <ul>
        <li><a href="tambah_data.php">Tambah Data Antrian</a></li> <!-- Link untuk menambah data antrian -->
        <li><a href="hapus_data.php">Hapus Data Antrian</a></li> <!-- Link untuk menghapus data antrian pertama -->
        <li><a href="bersihkan_antrian.php">Bersihkan Antrian</a></li> <!-- Link untuk membersihkan seluruh antrian -->
        <li><a href="cetak_antrian.php">Cetak Antrian</a></li> <!-- Link untuk mencetak/melihat seluruh antrian -->
    </ul>
</body>
</html>
