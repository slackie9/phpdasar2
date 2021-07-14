<?php

$laptops = [
    [
        "name" => "Toshiba",
        "code" => "062406101",
        "email" => "support@mail.com",
        "merk" => "Notebook",
        "image" => "1.jpg",    
    ],
    [
        "name" => "Dell",
        "code" => "09210102",
        "email" => "support@mail.com",
        "merk" => "Notebook",
        "image" => "2.jpg",                
    ],
    [
        "name" => "Asus",
        "code" => "062406103",
        "email" => "supports@mail.com",
        "merk" => "Notebook",
        "image" => "3.jpg",     
    ],
    [
        "name" => "HP",
        "code" => "062406104",
        "email" => "support@mail.com",
        "merk" => "Notebook",
        "image" => "4.jpg",     
    ],
    [
        "name" => "Lenovo",
        "code" => "062406105",
        "email" => "support@mail.com",
        "merk" => "Notebook",
        "image" => "5.jpg",     
    ],
    [
        "name" => "IBM",
        "code" => "062406106",
        "email" => "support@mail.com",
        "merk" => "Notebook",
        "image" => "6.jpg",     
    ],
    [
        "name" => "ROG",
        "code" => "062406107",
        "email" => "support@mail.com",
        "merk" => "Notebook",
        "image" => "1.jpg",     
    ],
    [
        "name" => "Omen",
        "code" => "062406108",
        "email" => "support@mail.com",
        "merk" => "Notebook",
        "image" => "2.jpg",     
    ],
    [
        "name" => "Acer",
        "code" => "062406109",
        "email" => "support@mail.com",
        "merk" => "Computer Science",
        "image" => "3.jpg",     
    ],
    [
        "name" => "MacBook",
        "code" => "062406110",
        "email" => "@mail.com",
        "merk" => "Notebook",
        "image" => "4.jpg",     
    ],
    
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Laptop</title>
    <style>
        img{
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
        li {
            margin: 2px auto;
        }
    </style>
</head>
<body>
    <h1>Daftar Laptop</h1>
    <?php foreach($laptops as $laptop ) : ?>
        <ul>    
            <li><img src="img/<?= $laptop["image"] ?>" alt=""></li>
            <li><?= $laptop["name"] ?></li>
            <li><?= $laptop["code"] ?></li>
            <li><?= $laptop["email"] ?></li>
            <li><?= $laptop["merk"] ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>