<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">
    <label for="nama">Nilai 1:</label>
    <input type="number" name="nilai_1"><br><br>
    <label for="text">Nilai 2:</label>
    <input type="number" id="" name="nilai_2"><br><br>
    <label for="operation">Operation:</label>
    <select name="operation" id="">
        <option value="tbh">+</option>
        <option value="kr">-</option>
        <option value="bg">/</option>
        <option value="kli">x</option>

    </select><br><br>
    <input type="submit" name="simpan" value="Simpan">
</form>
<?php 
if (isset($_POST["simpan"])) {
    $nilai_1 = $_POST['nilai_1'];
    $nilai_2 = $_POST['nilai_2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case 'tbh':
            $hasil = $nilai_1 + $nilai_2;
            echo "$nilai_1 + $nilai_2 = $hasil";
            break;
        case 'kr':
            $hasil = $nilai_1 - $nilai_2;
            echo "$nilai_1 - $nilai_2 = $hasil";
            break;
        case 'bg':
            $hasil = $nilai_1 / $nilai_2;
            echo "$nilai_1 / $nilai_2 = $hasil";
            break;
        case 'kli':
            $hasil = $nilai_1 * $nilai_2;
            echo "$nilai_1 x $nilai_2 = $hasil";
            break;
        default:
            echo "wkwkwkwkw";
            break;
    }
}
?>

</body>
</html>
