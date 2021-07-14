<?php
// variable Scope
// $x =10;

// function showX(){
//     global $x;
//     echo $x;
// }

// showX();


//superglobal
// global PHP's variable
// constitute array associative


// $_GET

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
    <title>Get</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <img class="image" src="img/<?= $mhs['image'] ?>" alt="">
        </li>
        <li>
            <a href="latihan2.php?
            nama=<?= $mhs["nama"] ?>
            &nim=<?= $mhs["nim"] ?> 
            &email=<?= $mhs["email"] ?>
            &major=<?= $mhs["major"] ?>
            &image=<?= $mhs["image"] ?>
            ">
            <?= $mhs["nama"] ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>