<?php 
// ARRAY
// MEMBUAR ARRAY 
$hari = array("senin", "selasa", "rabu");
$bulan = ["januari", "febuari", "marer"];
$arr = [100, "teks", true];

// menampilkan array

// versi debuguing
var_dump($hari);
print_r($bulan);

// menampilkan 1 elemen pada array
echo $arr[0];






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            line-height: 30px;
            margin: 3px;
            float: left;
            background-color: #BADA55;
            transition: 0.5s;

        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;

        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php 
$angka = [
    [1,2,3],
    [4,5,6,],
    [7,8,9]
        ];
echo $angka[1][1];
?>
    <?php foreach($angka as $a ): ?>
        <?php foreach($a as $b) : ?>
    <div class="kotak"><?=  $b;  ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
    <?php endforeach; ?>


</body>
</html>