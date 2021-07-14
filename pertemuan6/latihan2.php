<?php
// $mahasiswa =[
//             ["Slackie", "06240641014", "slackie@mail.com", "Computer Science"],
//             ["Mayuki", "09210069", "mayuki@mail.com", "Computer Science"],
//             ["09210555", "Dracois", "mayuki@mail.com", "Computer Science"],
// ];

// array Asscociative
// key nya adalah string yang kita buat sendiri

$mahasiswa = [
            [
                "nama" => "Slackie",
                "nim" => "062406104",
                "email" => "slackie@mail.com",
                "major" => "Computer Science",
                "image" => "1.jpg",    
            ],
            [
                "nama" => "Mayuki",
                "nim" => "092101069",
                "email" => "mayuki@mail.com",
                "major" => "Computer Science",
                "image" => "6.jpg",                
            ],
            [
                "nama" => "Dracois",
                "nim" => "062406107",
                "email" => "dracois@mail.com",
                "major" => "Computer Science",
                "image" => "2.jpg",     
            ],
        ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        img{
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs['image'] ?>" alt="">
            </li>
            <li>Nama: <?= $mhs["nama"] ?></li>
            <li>NIM: <?= $mhs["nim"] ?></li>
            <li>Email: <?= $mhs["email"] ?></li>
            <li>Major: <?= $mhs["major"] ?></li>
        </ul>    
    <?php endforeach; ?>
</body>
</html>
