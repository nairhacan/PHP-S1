<?php 

function salam($waktu = "datang", $nama = "admin") {
    return "selmat  $waktu, $nama";

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latiahn</title>
</head>
<body>
    <h1><?php echo salam("pagi","ilman"); ?></h1>
    
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<style>
</style>
<body>
    <form action="" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" name="simpan" value="Simpan">
        <label for="alamat">alamat :</label>
        <input type="text" id ="alamat">
    </form>

    <?php
    if (isset($_POST["simpan"])) {
        $nama = ($_POST['nama']);
        $email =($_POST['email']);

        // input yang akan di masukan
        echo "<h2 style='color: red;'>Data yang diinput:</h2>";
        echo "<p style='color: red;'>Nama: " . $nama . "</p>";
        echo "<p style='color: red;'>Email: " . $email . "</p>";
    }
    ?>
