<?php
// cek apahah tidak ada data di $_GET

if( !isset($_GET["nama"]) ||
    !isset($_GET["code"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["merk"]) ||
    !isset($_GET["image"]) 
) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Laptop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<ul>
        <li>
            <img class="image" src="img/<?= $_GET["image"]  ?>" alt="">
        </li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["code"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["merek"]; ?></li>
    </ul>

    <a href="latihan1.php">kembali ke daftar mahasiswa</a>
</body>
</html>