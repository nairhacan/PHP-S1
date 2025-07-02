<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .cn {
            text-align: center;
        }
        .tx {
            text-align: left;
        }
        .bg {
            background-color: gray;
        }
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="row justify-content-text-center cn mt-4">
        <div class="col-2"></div>
        <div class="col-2 tx">
            <br>
            <p>nama</p>  
            <p>tempat lahir</p> 
            <p>tanggal lahir</p> 
            <p>gender</p> 
            <p>alamat</p> <br> <br> <br> <br>
            <p>agama</p> 
            <p>pendidikan terakhir</p> 
            <p>status</p>
            <p>hobi</p> 
            <p>cita cita</p> 
            <p>kata kata bijak</p> 


        </div>
        <div class="col-4 tx">
            <form action="" method="POST">
            <p><input type="text" class="form-control" name="nama"></p>
                                <p><input type="text" class="form-control" name="tempat_lahir"></p>
                                <p><input type="date" class="form-control" name="tanggal_lahir"></p>
                                <p><input type="radio" name="gender" value="laki laki"> laki laki
                                 <input type="radio" name="gender" value="perempuan"> perempuan</p>
                                <p><textarea name="alamat" class="form-control"></textarea></p>
                                <p><select class="form-select" name="agama">
                                        <option value="islam">islam</option>
                                        <option value="kristen">kristen</option>
                                        <option value="budha">budha</option>
                                        <option value="hindu">hindu</option>
                                </select></p>
                                <p><select class="form-select" name="pendidikan_terakhir">
                                        <option value="tk">tk</option>
                                        <option value="sd">sd</option>
                                        <option value="smp">smp</option>
                                        <option value="sma">sma</option>
                                        <option value="s1">s1</option>
                                </select></p>
                                <p><input type="text" class="form-control" name="status"></p>
                                <p><input type="checkbox" name="hobi" value="membaca"> membaca <input type="checkbox" name="hobi" value="menulis"> menulis <input type="checkbox" name="hobi[]" value="ngepush"> ngepush</p>
                                <p><select name="cita_cita" class="form-select">
                                        <option value="programmer">programmer</option>
                                        <option value="pilot">pilot</option>
                                        <option value="presiden">presiden</option>
                                        <option value="lainnya">lainnya</option>
                                </select></p>
                                <p><textarea name="kata_bijak" class="form-control"></textarea></p>
                                <p><button type="submit" name="simpan" value="simpan" class="btn btn-primary">Submit</button></p>
            </form>
        </div>
    </div>

    <?php

if (isset($_POST["simpan"])) {
    $nama = $_POST['nama'];
    $lahir = $_POST['tempat_lahir'];
    $tanggal_lhr = $_POST['tanggal_lahir'];
    $kelamin = $_POST['gender'];
    $agama = $_POST['agama'];
    $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];
    $kata_bijak = $_POST['kata_bijak'];

}
?>
  <div class="row justify-content-text-center">
    <div class="col-2">
    <table border="1" class="bg" >
        <tr>
            <td>nama</td>
            <td>tempat lahir</td>
            <td>tanggal lahir</td>
            <td>jenis kelamin</td>
            <td>alamat</td>
            <td>agama</td>
            <td>pendidikan terakhir</td>
            <td>status</td>
            <td>hobi</td>
            <td>cita cita</td>
            <td>kata kata bijak</td>
        </tr>
        <tr>
            <td><?php echo " $nama";   ?></td>
            <td> <?php echo "$lahir";  ?></td>
            <td> <?php echo "$tanggal_lhr"; ?></td>
            <td><?php echo "$kelamin"; ?></td>
            <td><?php echo "$agama"; ?></td>
            <td><?php echo "$pendidikan_terakhir" ?></td>
            <td><?php echo "$status"; ?></td>
            <td><?php echo "$hobi"; ?></td>
            <td><?php echo "$cita_cita"; ?></td>
            <td><?php echo "$kata_bijak"; ?></td>
        </tr>
    </table>
    </div>
  </div>
</body>
</html>
























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