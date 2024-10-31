<!DOCTYPE html>
<html>
<head>
    <title>Menu Data Buku</title>
</head>
<body>

<?php
session_start();

// Fungsi untuk menambah buku di awal daftar
function tambahBukuAwal($judul, $harga, &$daftarBuku) {
    array_unshift($daftarBuku, array("judul" => $judul, "harga" => $harga));
}

// Fungsi untuk menambah buku di akhir daftar
function tambahBukuAkhir($judul, $harga, &$daftarBuku) {
    array_push($daftarBuku, array("judul" => $judul, "harga" => $harga));
}

// Fungsi untuk menghapus buku dari awal daftar
function hapusBukuAwal(&$daftarBuku) {
    array_shift($daftarBuku);
}

// Fungsi untuk menghapus buku dari akhir daftar
function hapusBukuAkhir(&$daftarBuku) {
    array_pop($daftarBuku);
}

// Fungsi untuk menampilkan daftar buku
function tampilkanDataBuku($daftarBuku) {
    echo "<h2>Daftar Buku:</h2><ul>";
    foreach ($daftarBuku as $buku) {
        echo "<li>Judul: " . htmlspecialchars($buku['judul']) . ", Harga: " . htmlspecialchars($buku['harga']) . "</li>";
    }
    echo "</ul>";
}

// Inisialisasi daftar buku jika belum ada
if (!isset($_SESSION['daftar_buku'])) {
    $_SESSION['daftar_buku'] = array();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['menu'])) {
    $menu = $_POST['menu'];
    $judul = htmlspecialchars($_POST['judul'] ?? '');
    $harga = htmlspecialchars($_POST['harga'] ?? '');
    
    if (($menu == 1 || $menu == 2) && !empty($judul) && !empty($harga)) {
        if ($menu == 1) {
            tambahBukuAwal($judul, $harga, $_SESSION['daftar_buku']);
        } else {
            tambahBukuAkhir($judul, $harga, $_SESSION['daftar_buku']);
        }
    } elseif ($menu == 3) {
        hapusBukuAwal($_SESSION['daftar_buku']);
    } elseif ($menu == 4) {
        hapusBukuAkhir($_SESSION['daftar_buku']);
    }
    // Pengalihan untuk menghindari pengiriman formulir ulang
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<h1>Menu Data Buku</h1>

<form method="post">
    <label for="judul">Judul Buku:</label><br>
    <input type="text" id="judul" name="judul" required><br>
    <label for="harga">Harga Buku:</label><br>
    <input type="text" id="harga" name="harga" required><br><br>
    <select id="menu" name="menu">
        <option value="1">Tambahkan daftar buku di awal</option>
        <option value="2">Tambahkan daftar buku di akhir</option>
        <option value="3">Hapus daftar buku di awal</option>
        <option value="4">Hapus daftar buku di akhir</option>
    </select><br><br>
    <input type="submit" value="Simpan"><hr>
</form>

<?php
// Menampilkan daftar buku setelah ada operasi pengiriman form
if (!empty($_SESSION['daftar_buku'])) {
    tampilkanDataBuku($_SESSION['daftar_buku']);
}
?>

<form method="get">
    <h2><label for="kembali">Kembali tampilan awal</label><br></h2>
    <input type="submit" name="kembali" value="Ya">
    <input type="submit" name="kembali" value="Tidak"><br>
</form>

<?php
// Proses permintaan kembali ke menu
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['kembali'])) {
    if ($_GET['kembali'] == "Ya") {
        session_destroy();
        // Catatan: Pengalihan di sini dapat mencegah pesan penghancuran sesi dari ditampilkan karena pengalihan segera.
        echo "<script>window.location.href = '".$_SERVER['PHP_SELF']."';</script>";
    } else {
        echo "<h3>Terima kasih!</h3>";
    }
}
?>

</body>
</html>