<?php
// koneksi ke database
require 'koneksi.php';



if(isset($_POST["submit"])) {



  if (tambah($_POST) > 0) {
    echo " <script>alert('data berhasil ditambahkan!');
    document.location.href = 'index.php';
    </script>";
  }else
  echo " <script>alert('data gagal ditambahkan!');";

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data mahasiswa</title>
    <style>

    </style>
</head>
<body>
    
<h1>tambah data</h1>

<form action="" method="POST">
    <ul>
        <li>
            <label for="nrp">nrp:</label>
            <input type="text" name="nrp" id="nrp" required>
        </li>
        <li>
            <label for="nama">nama:</label>
            <input type="text" name="nama" id="nama" required>
        </li>
        <li>
            <label for="email">email:</label>
            <input type="email" name="email" id="email" required>
        </li>
        <li>
            <label for="jurusan">jurusan:</label>
            <input type="text" name="jurusan" id="jurusan" required>
        </li>
        <li>
            <label for="gambar">gambar:</label>
            <input type="text" name="gambar" id="gambar" required>
        </li>
        <li>
            <button type="submit" name="submit">tambah data!</button>
        </li>
    </ul>

</form>

</body>
</html>