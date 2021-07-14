<?php
$mahasiwa =[ 
    ["Slackie", "062406104", "Computer Science", "slackie@mail.com" ],
    ["Mayuki", "09125069", "Computer Science", "mayuki@mail.com" ],
    ["Megalomen ", "062406107", "Computer Science", "megalomen@mail.com" ],
    ["Dracois ", "062406107", "Computer Science", "Dracois@mail.com" ],
    

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiwa as $mhs) : ?>
    <ul>
        <?php foreach($mhs as $mh) : ?>
            <li>
                <?= $mh; ?>
            </li>
            <?php endforeach ?>
    </ul>
    <?php endforeach ?>
</body>
</html>