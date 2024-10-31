<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomor_rekening = $_POST['nomor_rekening'];

    // Lakukan proses penghapusan data antrian, misalnya dari database atau file

    echo "Data dengan nomor rekening $nomor_rekening berhasil dihapus!";
}
?>
<br>
<a href="menu_utama.php">Kembali ke Menu Utama</a>
