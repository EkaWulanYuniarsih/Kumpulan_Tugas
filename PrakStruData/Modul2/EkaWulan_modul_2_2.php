<?php
// dalam PHP, data struktur lebih umum diwakili menggunakan array atau objek
$larik= array ("satu", "dua", "tiga", "empat");// membuat array homogen
$data= array ("5", "enam", "7.0", "delapan");// membuat array heterogen
$person1 = array(// membuat array asosiatif
    "name" => "John",
    "age" => 30,
    "gender" => "Male",
    "contact" => array (
        "phone" => "0812221110",
        "email" => "person1@gmail.com"
    )
    );
    // menampilkan data array homogen
echo "<p><b> Array Homogen </b><hr>";
echo "<pre>";
print_r($larik);// melakukan print langsung seluruh data array homogen
echo "</pre>";
echo "</p>";
// menampilkan data array heterogen
echo "<p><b> Array Heterogen </b><hr>";
echo "<pre>";
print_r($data);
echo "</pre>";
echo "</p>";
// menampilan data array asosiatif
echo "<p><b> Array Asosiatif</b><hr>";
echo "Person 1  :   {$person1['name']}, {$person1['age']}, {$person1['gender']}, {$person1['contact']['email']},  {$person1['contact']['phone']} <br>";
echo "</p>";
?>