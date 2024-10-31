<?php
//membuat variabel array bersarang 3 tingkat
$negara = [
  "nama" => 'Konohagakure',// input nama negara
  "presiden" => 'Naruto',// input nama presiden 
  "provinsi" => [
    [// menentukan nama provinsi, gubernur dan kota
      "nama" => 'Otogakure',
      "gubernur" => 'Sasuke',
      "kota" => [
        [
          "nama" => 'Sunagakure',
          "bupati" => 'Himawari'
        ],
        [
          "nama" => 'Kirigakure',
          "bupati" => 'Buruto'
        ]
      ]
    ],
    [
      "nama" => 'Kumogakure',
      "gubernur" => 'Kaguya',
      "kota" => [
        [
          "nama" => 'Amegakure',
          "bupati" => 'Kurama'
        ],
        [
          "nama" => 'Iwagakure',
          "bupati" => 'Hinata'
        ]
      ]
    ]
  ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- menampilkan semua data yang ada dalam array 3 tingkat menggunakan echo -->
  <?php echo 'Negara ' . $negara['nama'] . '<br>';
  echo '=========================== <br>';
  echo 'Presiden : ' . $negara['presiden'] . '<br>';
  echo '--------------------------- <br>';
  echo 'PROVINSI ' . $negara['provinsi'][0]['nama'] . '<br>';
  echo 'Gubernur : ' . $negara['provinsi'][0]['gubernur'] . '<br>';
  echo 'Kota di Konohagakure<br> ++++++++++++++++++ <br>';
  echo 'Kota ' . $negara['provinsi'][0]['kota'][0]['nama'] . '<br>' .
    'Bupati : ' . $negara['provinsi'][0]['kota'][0]['bupati'] . '<br> 
    ++++++++++++++++++ <br>';
  echo 'Kota ' . $negara['provinsi'][0]['kota'][1]['nama'] . '<br>' .
    'Bupati : ' . $negara['provinsi'][0]['kota'][1]['bupati'] .
    '<br> ++++++++++++++++++ <br> 
    ----------------------------<br>';
  echo 'PROVINSI ' . $negara['provinsi'][1]['nama'] . '<br>';
  echo 'Gubernur : ' . $negara['provinsi'][1]['gubernur'] . '<br>';
  echo 'Kota di Konohagakure <br> ++++++++++++++++++ <br>';
  echo 'Kota ' . $negara['provinsi'][1]['kota'][0]['nama'] . '<br>' .
    'Bupati : ' . $negara['provinsi'][1]['kota'][0]['bupati'] .
    '<br> ++++++++++++++++++ <br>';
  echo 'Kota ' . $negara['provinsi'][1]['kota'][1]['nama'] . '<br>' .
    'Bupati : ' . $negara['provinsi'][1]['kota'][1]['bupati'] .
    '<br> ++++++++++++++++++ <br> ----------------------------';
  ?>
</body>
</html>