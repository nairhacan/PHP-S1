<?php
session_start();

function prosesAngka($angka) {
    $jumlah = array_sum($angka);
    $rataRata = $jumlah / count($angka);
    return [
        'jumlah' => $jumlah,
        'rataRata' => $rataRata
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $angka = isset($_POST['angka']) ? explode(',', $_POST['angka']) : [];
    $angka = array_map('intval', $angka);

    if (!empty($angka)) {
        $_SESSION['hasil'] = prosesAngka($angka);
        $_SESSION['angka'] = $angka;
    }
    header('Location: session.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST, Fungsi, Session, dan Array</title>
</head>
<body>
    <h1>Masukkan Angka</h1>
    <form action="" method="POST">
        <label for="angka">Masukkan angka (pisahkan dengan koma):</label>
        <input type="text" name="angka" id="angka" required>
        <button type="submit">Kirim</button>
    </form>

    <?php if (isset($_SESSION['hasil'])): ?>
        <h2>Hasil</h2>
        <p>Angka: <?= implode(', ', $_SESSION['angka']); ?></p>
        <p>Jumlah: <?= $_SESSION['hasil']['jumlah']; ?></p>
        <p>Rata-rata: <?= $_SESSION['hasil']['rataRata']; ?></p>
        <?php session_unset(); ?>
    <?php endif; ?>
</body>
</html>