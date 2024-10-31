<?php
// Memulai session untuk dapat menggunakan data session yang telah diset
session_start();

// Mengecek jika form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data nama dan nomor rekening dari form
    $nama = $_POST['nama'] ?? '';
    $nomor_rekening = $_POST['nomor_rekening'] ?? '';
    echo "Data sudah ditambahkan";

    // Menambahkan data baru ke dalam session antrian
    $_SESSION['antrian'][] = ['nama' => $nama, 'nomor_rekening' => $nomor_rekening];
    
    // Mengarahkan kembali ke halaman utama
    header('Location: menu_utama.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Antrian</title>
</head>
<body>
    <h2>Tambah Data Antrian</h2>
    <form action="tambah_data.php" method="post">
        Nama:<br>
         <input type="text" name="nama"><br> <!-- Input untuk nama -->
        Nomor rekening: <br>
        <input type="text" name="nomor_rekening"><br> <!-- Input untuk nomor rekening -->
        <input type="submit" value="Tambah"> <!-- Tombol submit form -->
    </form>
    <a href="menu_utama.php">Kembali ke Menu Utama</a> <!-- Link kembali ke menu utama -->
</body>
</html>
