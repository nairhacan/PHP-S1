<!-- pertemuan 1 Universitas pasundan  -->

<?php
    echo "hello world!";



    $nama ="davin";
    $jenis_klm ="laki laki";
    $agama ="islam";
    $jurusan ="RPL";
    $asal_sklh ="smk assalaam";
    $hobi ="coding";


?>
<!-- penulisan nya pada browser ('localhost/nama folder/nama file') pastikan 
 juga pada shoftware XAMPP sudah di aktif kan pada bagian apache -->

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .tengah {
            text-align: center;
        }
        .gambar {
            width: 300;
        }
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
    
  <div class="tengah">
     <img src="https://t3.ftcdn.net/jpg/01/25/95/12/360_F_125951288_jwJzHIizOBuXebU3le2zzeeSkZ9GXiz7.jpg" alt="" class="gambar">
 <p> <?php  echo "nama = $nama"; ?></p>
 <p> <?php  echo "jenis kelamin = $jenis_klm"; ?></p>
 <p> <?php    echo "agama = $agama"; ?> </p>
 <p> <?php     echo "jurusan $jurusan"; ?> </p>
 <p> <?php echo "asal sekolah $asal_sklh"; ?> </p>
 <p> <?php    echo "hobi $hobi"; ?> </p>

  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>



 
