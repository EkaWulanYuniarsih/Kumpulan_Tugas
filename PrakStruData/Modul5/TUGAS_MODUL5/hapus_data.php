<?php
// Memulai session untuk menggunakan data session
session_start();
// Menghapus data antrian pertama (paling depan)
array_shift($_SESSION['antrian']);
// Mengarahkan pengguna kembali ke halaman utama
header('Location: menu_utama.php');
