<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Unik PHP & HTML</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fafafa;
            color: #333;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #ff6347;
            font-size: 48px;
        }
        .message {
            font-size: 24px;
            margin-top: 20px;
            color: #4682b4;
            font-weight: bold;
        }
        .saran {
            margin-top: 30px;
            font-size: 20px;
            color: #8b008b;
        }
        .button {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
        }
        .button:hover {
            background-color: #45a049;
        }
        .input-box {
            padding: 10px;
            font-size: 16px;
            margin-top: 20px;
            border-radius: 5px;
            border: 2px solid #ccc;
        }
        .input-box:focus {
            border-color: #4caf50;
        }
        .animation {
            color: #ff6347;
            font-size: 32px;
            animation: textAnimation 3s infinite;
        }
        @keyframes textAnimation {
            0% { color: #ff6347; }
            50% { color: #4682b4; }
            100% { color: #ff6347; }
        }
    </style>
</head>
<body>

    <h1>Selamat Datang di Program Unik!</h1>

    <div class="animation">
        <p>Program ini memberikan saran hidup yang lucu!</p>
    </div>

    <div class="message">
        <?php
            // Pesan-pesan yang akan ditampilkan
            $messages = [
                "Hidup itu seperti PHP: penuh dengan bug, tapi tetap menyenankan!",
                "Jangan khawatir, jika gagal, kamu bisa me-refresh hidupmu!",
                "Hidupmu seperti HTML: kadang perlu style untuk lebih menarik!",
                "Kadang kamu butuh waktu untuk debug, kadang itu adalah waktu untuk diri sendiri.",
                "Ingat: setiap kesalahan adalah langkah menuju kode yang lebih baik."
            ];

            // Menampilkan pesan secara acak
            echo $messages[array_rand($messages)];
        ?>
    </div>

    <form method="POST">
        <label for="name">Masukkan Nama Anda untuk Saran Kehidupan:</label><br><br>
        <input type="text" name="name" class="input-box" placeholder="Nama Anda..."><br><br>
        <button type="submit" class="button">Dapatkan Saran!</button>
    </form>

    <?php
        // Mengecek apakah form sudah dikirimkan
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil nama dari form
            $name = htmlspecialchars($_POST['name']);
            
            // Array saran kehidupan
            $life_advice = [
                "Jangan takut mencoba hal baru, hidupmu akan lebih berwarna!",
                "Cobalah beristirahat sebentar, kadang waktu untuk diri sendiri itu penting.",
                "Jadilah seperti kode, jangan pernah berhenti untuk beradaptasi.",
                "Hidup itu seperti loop: kadang berputar, kadang berjalan lurus!",
                "Saat hidup memberi kamu bug, carilah solusinya dengan senyuman!",
                "kamu sedang tidak beruntung hari ini",
                "yah sial ya? nikmati aja kan ",
                "khsus buat kamu yang putus asa sehingga datang ke website kami",
            ];

            // Menampilkan saran berdasarkan nama
            if (!empty($name)) {
                echo "<div class='saran'>Halo, <strong>$name</strong>! Saran untuk hidupmu hari ini: <br><br>";
                echo $life_advice[array_rand($life_advice)];
                echo "</div>";
            } else {
                echo "<div class='saran'>Masukkan nama untuk mendapatkan saran hidup!</div>";
            }
        }
    ?>

</body>
</html>
<?php 

?>