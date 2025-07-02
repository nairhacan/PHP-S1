<?php
$host = 'localhost'; // Ganti dengan host database Anda
$username = 'root'; // Ganti dengan username MySQL Anda
$password = ''; // Ganti dengan password MySQL Anda
$database = 'user_data'; // Nama database Anda

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
