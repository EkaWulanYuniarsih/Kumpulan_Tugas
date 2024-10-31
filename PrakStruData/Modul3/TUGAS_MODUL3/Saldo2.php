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

    <!-- membuat form tambah saldo tabungan 2 -->
    <label for="tambah2">Tambah Saldo Tabungan 2</label><br>
    <input type="number" id="saldo2" name="saldo2"><br>
    <input type="submit" name="submit"><br><br>

    <?php
    //memastikan tombol submit sudah di tekan
    if (isset($_POST['submit'])) {
      //jika saldo belum ditambah maka akan berisi 0
      $_SESSION['tambah2'] = 0;
    }

    //memastikan tombol submit sudah di tekan
    if (isset($_POST['submit'])) {
      //saat saldo telah ditambahkan datanya akan berubah seperti yg di inputkan
      $_SESSION['tambah2'] += $_POST['saldo2'];
      //pemberitahuan jika saldo sudah terisi
      echo "Saldo tabungan telah ditambahkan<br><br>";
    }
    ?>
    <!-- hyperlink ke menu utama -->
    <a href="Utama.php">Menu Utama</a>
</body>
</html>