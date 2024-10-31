<?php
// Memulai session
session_start();
// Mengosongkan/membersihkan semua data antrian
$_SESSION['antrian'] = [];
// Redirect ke halaman utama
header('Location: menu_utama.php');
