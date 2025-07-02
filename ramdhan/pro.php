<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animasi Nama Kelompok</title>
    <link rel="stylesheet" href="pro.css">
</head>
<body>
    <div class="container">
        <!-- Nama Kelompok -->
        <div class="group-name">
            <p>NLFTS</p>
        </div>
        
        <!-- Nama Anggota -->
        <div class="members">
            <p>DAVIN JIHAD RAIHAN ERLIANA FADHIL</p>
        </div>

        <!-- Tombol Masuk -->
        <div class="enter-btn">
            <button id="enterButton" onclick="window.location.href='login.php';">Masuk</button>
        </div>
    </div>

    <!-- Elemen Tugas Glitch -->
    <div class="glitch-container">
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
        <p class="glitch">EROR 404</p>
    </div>

    <script>
        window.onload = function() {
            // Animasi muncul saat halaman dimuat
            document.querySelector('.group-name p').classList.add('group-anim');
            document.querySelector('.members p').classList.add('members-anim');

            // Tombol Masuk muncul setelah animasi selesai
            setTimeout(function() {
                document.querySelector('.enter-btn').style.opacity = '1';
                document.querySelector('.enter-btn').style.transform = 'translateY(0)';
            }, 3000); // Tombol muncul setelah 3 detik
        };
    </script>
</body>
</html>
