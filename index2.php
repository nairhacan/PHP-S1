<?php
require 'functions.php';
$mahasiswa = query($con, "SELECT * FROM mahasiswa");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>no</th>
            <th>aksi</th>
            <th>gambar</th>
            <th>nrp</th>
            <th>nama</th>
            <th>email</th>
            <th>jurusan</th>
        </tr>
        <?php $i =1; ?>
        <?php foreach( $mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i;  ?></td>
            <td>
                <a href="#">ubah</a> | 
                <a href="#">hapus</a></td>
            </td>
            <td><img src="img/<?php echo $mhs["gambar"]; ?>" alt="" width="50"></td>
            <td><?= $mhs["nrp"]; ?></td>
            <td><?= $mhs["nama"];  ?></td>
            <td><?= $mhs["email"];  ?></td>
            <td><?= $mhs["jurusan"];  ?></td>
            
        <tr>
            <?php $i++; ?>
            <?php endforeach ?>
             
</body>
</html>