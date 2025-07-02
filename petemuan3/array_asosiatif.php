<?php


// key adalah sting yang di buat sendiri
// definisi nya sama seperti numerik 

$mahasiswa =  [
 [
    "nama" => "sandika  galih",
    "nrp" => "0999997",
    "email" => "sandika@gamil",
    "jurusan" => "teknik informatika",
],
[
    "nama" => "nairha.can",
    "nrp" => "09876567",
    "email" => "nairha@gamil",
    "jurusan" => "teknik informatika",
    "tugas" => [90, 80, 100]
]

 ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
            <?php foreach( $mahasiswa as $db) : ?>
            <li>nama<?= $db["nama"]; ?></li>
            <li>nrp<?= $db["nrp"]; ?></li>
            <li> email<?= $db["email"]; ?></li>
            <li> jurusan<?= $db["jurusan"]; ?></li>
            <?php endforeach; ?>
    </ul>
</body>
</html>