<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode POST</title>
</head>
<body>
    <h1>Form dengan Metode POST</h1>
    <?php
    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $pesan = htmlspecialchars($_POST['pesan']);

        // Tampilkan data
        echo "<h2>Data yang Dikirim:</h2>";
        echo "Nama: $nama<br>";
        echo "Email: $email<br>";
        echo "Pesan: $pesan<br>";
    }
    ?>

    <form action="" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="pesan">Pesan:</label><br>
        <textarea id="pesan" name="pesan" rows="4" required></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
<?php
// Contoh fungsi untuk memproses data
function prosesData($nama, $email, $pesan) {
    return [
        'nama' => strtoupper($nama),
        'email' => strtolower($email),
        'pesan' => ucfirst($pesan)
    ];
}

// Gabungkan metode POST dengan fungsi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Panggil fungsi untuk memproses data
    $hasil = prosesData($nama, $email, $pesan);

    // Tampilkan hasil
    echo "<h2>Data yang Diproses:</h2>";
    echo "Nama: {$hasil['nama']}<br>";
    echo "Email: {$hasil['email']}<br>";
    echo "Pesan: {$hasil['pesan']}<br>";
}