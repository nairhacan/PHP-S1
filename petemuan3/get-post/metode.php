<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nama</title>
</head>
<?php  if ( isset($_POST["submit"])) : ?>
    <h1>halo, selamat datang <?=  $_POST["nama"];?></h1>
<?php endif; ?>


<body>
    <form  method="post">
        <input type="text"  name="nama">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php

    ?>
</body>
</html>