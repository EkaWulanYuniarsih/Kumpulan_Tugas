<!-- memulai session agar data bisa disimpan -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- form method post agar data dari formulir terkirim ke php-->
  <form method="post">

    <!-- membuat form tambah saldo tabungan 1 -->
    <label for="tambah1">Tambah Saldo Tabungan 1</label><br>
    <input type="number" id="saldo1" name="saldo1"><br>
    <input type="submit" name="submit"><br><br>

    <?php
    //memastikan tombol submit sudah di tekan
    if (isset($_POST['submit'])) {
      //jika saldo belum ditambah maka akan berisi 0
      $_SESSION['tambah1'] = 0;
    }

    //memastikan tombol submit sudah di tekan
    if (isset($_POST['submit'])) {
      //saat saldo telah ditambahkan datanya akan berubah seperti yg di inputkan
      $_SESSION['tambah1'] += $_POST['saldo1'];
      //pemberitahuan jika saldo sudah terisi
      echo "Saldo tabungan telah ditambahkan<br><br>";
    }
    ?>
    <!-- hyperlink ke menu utama -->
    <a href="Utama.php">Menu Utama</a>
</body>
</html>