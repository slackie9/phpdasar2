<?php
// array
// membuat array

// $hari = array("Monday", "Tuesday","Wednesday");
// $bulan =["January", "Febuary", "March"];
// $arr = [100, "test", true];


// // show array
// // versi debugging

// var_dump($hari);
// echo"<br>";
// print_r($bulan);
// // show 1 element array
// echo"<br>";
// echo $arr[0];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .box {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 0.5s;
        }
        .box:hover{
            transform: rotate(180deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php 
    $angka= [[1,2,3],
            [4,5,6],
            [7,8,9]]; 
    ?>
    <?php foreach($angka as $a) : ?>
        <?php foreach($a as $b) : ?>
    <div class="box">
        <?= $b; ?>
    </div>
        <?php endforeach ?>
        <div class="clear"></div>
    <?php endforeach ?>
</body>
</html>