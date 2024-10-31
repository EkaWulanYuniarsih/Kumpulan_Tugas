<!-- memulai session agar data bisa disimpan -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=3.0">
  <title>Document</title>
</head>

<body>
  <!-- form method post agar data dari formulir terkirim ke php-->
  <form method="post">

    <!-- membuat form tambah saldo tabungan 3 -->
    <label for="tambah3">Tambah Saldo Tabungan 3</label><br>
    <input type="number" id="saldo3" name="saldo3"><br>
    <input type="submit" name="submit"><br><br>

    <?php
    //memastikan tombol submit sudah di tekan
    if (isset($_POST['submit'])) {
      //jika saldo belum ditambah maka akan berisi 0
      $_SESSION['tambah3'] = 0;
    }

    //memastikan tombol submit sudah di tekan
    if (isset($_POST['submit'])) {
      //saat saldo telah ditambahkan datanya akan berubah seperti yg di inputkan
      $_SESSION['tambah3'] += $_POST['saldo3'];
      //pemberitahuan jika saldo sudah terisi
      echo "Saldo tabungan telah ditambahkan<br><br>";
    }
    ?>
    <!-- hyperlink ke menu utama -->
    <a href="Utama.php">Menu Utama</a>
</body>
</html>