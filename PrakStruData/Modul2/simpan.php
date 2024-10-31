<?php
$person = array (
    "name"=> $_POST['name'],//input data person perisi nama,usia,kota,email, dan phone
    "age"=> $_POST['age'],
    "city"=> $_POST['city'],
    "contacts"=> array (
        "email"=> $_POST['contacts']['email'],
        "phone"=> $_POST['contacts']['phone']
    )
    );
    echo 'Name  :'.$person["name"].'<br/>';// output nama
    echo 'Age  :'.$person["age"].'<br/>';// output usia
    echo 'City  :'.$person["city"].'<br/>';// output city
    echo 'Email  :'.$person["contacts"]["email"].'<br/>';// output email
    echo 'Phone  :'.$person["contacts"]["phone"].'<br/>';// output phone
    ?>