<?php
// Memulai session untuk akses data session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cetak Antrian</title>
</head>
<body>
    <h2>Cetak Antrian</h2>
    <?php if (!empty($_SESSION['antrian'])): ?>
        <ul>
            <?php foreach ($_SESSION['antrian'] as $i => $antrian): ?>
                <li><?php echo htmlspecialchars($i + 1 . ". " . $antrian['nama'] . " - " . $antrian['nomor_rekening']); ?></li> <!-- Menampilkan setiap antrian -->
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Antrian kosong.</p> <!-- Tampilkan jika antrian kosong -->
    <?php endif; ?>
    <a href="menu_utama.php">Kembali ke Menu Utama</a> <!-- Link kembali ke menu utama -->
</body>
</html>
