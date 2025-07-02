<?php

// koneksi ke data base
$con = mysqli_connect("localhost","root","","phpdasar" );

// ambil data dari tabel mahasiswa
$result =  mysqli_query($con, "SELECT * FROM mahasiswa");
// untuk memeriksa apakah database terhubung
if(!$result){
    echo mysqli_error($con);
}
// ambil data (fetch) mahasiswa dari object result
// ada 4 cara menampilkan nya
// mysqli_ferch_row() menegmablikan array numerik
// mysqli_ferch_assoc() menggembalika array associative
// mysqli_ferch_array()
// mysqli_ferch_object()



// $mhs = mysqli_fetch_row($result);
// var_dump($mhs); // menampilkan data array numerik
// echo "<br><br>";
// var_dump($mhs[3]); // menampilkan data array numerik
// echo "<br><br>";


//     // myqli_ferch_assoc() menampilkan array associative
// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs); // menampilkan data array associative
// echo "<br><br>";



//     // mysqli_ferch_array() menampilkan array numerik dan associative
// $mhs = mysqli_fetch_array($result);
// var_dump($mhs); // menampilkan data array numerik dan associative
// echo "<br><br>";
// var_dump($mhs['email']); // menampilkan data array associative
// echo "<br><br>";



//     // mysqli_ferch_object() menampilkan object
// $mhs = mysqli_fetch_object($result);
// var_dump($mhs); // menampilkan data object


// while ($mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }   


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
        <?php while( $row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i;  ?></td>
            <td>
                <a href="#">ubah</a> | 
                <a href="#">hapus</a></td>
            </td>
            <td><img src="img/<?php echo $row["gambar"]; ?>" alt="" width="50"></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"];  ?></td>
            <td><?= $row["email"];  ?></td>
            <td><?= $row["jurusan"];  ?></td>
            
        <tr>
            <?php $i++; ?>
            <?php endwhile ?>
             
</body>
</html>