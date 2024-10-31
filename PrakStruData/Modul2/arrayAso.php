<?php
$person1 = array(// melakukan input array person 1
    "name" => "John",// input nama
    "age" => 30,// input umur
    "gender"=> "Male"// input jenis kelamin
);
    $person2 = array(// input data person 2
        "name" => "Jane",// input nama
        "age" => 25,// input umur
        "gender"=> "Female"// input jenis kelamin
);
echo "<p><b>Array asosiatif</b><hr>";
echo "Person 1 : {$person1['name']};
{$person1['age']},{$person1['gender']}<br>";
echo "Person 2 : {$person2['name']},
{$person2['age']},{$person2['gender']}<br>";// menampilkan hasil uotput array asosiatif
?>