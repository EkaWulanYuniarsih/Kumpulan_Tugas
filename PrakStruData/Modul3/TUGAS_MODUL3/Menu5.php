<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  //memeriksa $_session sudah di definisikan apa belum
  if (!isset($_SESSION['tambah1'])) {
    //jika belum maka akan ditetapkan 0
    $_SESSION['tambah1'] = 0;
  }
  //memeriksa $_session sudah di definisikan apa belum
  if (!isset($_SESSION['tambah2'])) {
    //jika belum maka akan ditetapkan 0
    $_SESSION['tambah2'] = 0;
  }
  //memeriksa $_session sudah di definisikan apa belum
  if (!isset($_SESSION['tambah3'])) {
    //jika belum maka akan ditetapkan 0
    $_SESSION['tambah3'] = 0;
  }
  //memeriksa $_session sudah di definisikan apa belum
  if (!isset($_SESSION['tambahdp'])) {
    //jika belum maka akan ditetapkan 0
    $_SESSION['tambahdp'] = 0;
  }
  //menampilkan semua data yang ada
  echo "saldo rekening 1 : " . $_SESSION['tambah1'] . "<br>";
  echo "saldo rekening 2 : " . $_SESSION['tambah2'] . "<br>";
  echo "saldo rekening 3 : " . $_SESSION['tambah3'] . "<br>";
  echo "saldo deposito   : " . $_SESSION['tambahdp'] . "<br>";
  ?>
  <!-- hyperlink ke menu utama -->
  <a href="Utama.php">Menu Utama</a>
</body>
</html>