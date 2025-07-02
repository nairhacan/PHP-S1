<?php 

// Fungsi untuk menampilkan tanggal saat ini
// l = untuk menampilkan hari dalam bahasa Inggris
// d = untuk menampilkan tanggal
// M = untuk menampilkan bulan dalam bahasa Inggris
// y = untuk menampilkan tahun dalam 2 digit
echo date("l, d-m-y");

echo "<br>";

// Fungsi untuk menampilkan waktu saat ini dalam Unix timestamp / EPOCH time
// Ini akan menampilkan jumlah detik sejak 1 Januari 1970
echo time();

echo "<br>";

// Menampilkan tanggal 100 hari dari sekarang
// Perhitungannya adalah (60 detik * 60 menit * 24 jam * 100 hari)
echo date("l d m y", time() + 60 * 60 * 24 * 100);

echo "<br>";

// mktime
// Membuat timestamp untuk tanggal tertentu
// Urutan parameter adalah: jam, menit, detik, bulan, hari, tahun
echo date("l", mktime(0, 0, 0, 8, 25, 2009));

echo "<br>";

// Contoh tambahan:

// Menampilkan tanggal minggu depan
echo date("l, d-m-y", time() + 60 * 60 * 24 * 7);

echo "<br>";

// Menampilkan tanggal minggu lalu
echo date("l, d-m-y", time() - 60 * 60 * 24 * 7);

echo "<br>";

// Menampilkan tanggal dan waktu saat ini
echo date("l, d-m-y H:i:s");

echo "<br>";

// Membuat timestamp untuk tanggal dan waktu tertentu
// Contoh: 15 Agustus 2021, 10:30:00

echo "<br><br><br><br><br><br><br><br><br><br>";

// Contoh tugas:

// 1. Menampilkan tanggal 50 hari yang lalu
echo date("l, d-m-y", time() - 60 * 60 * 24 * 50);

echo "<br>";

// 2. Menampilkan hari dari tanggal lahir Anda
// Gantilah parameter mktime dengan tanggal lahir Anda
echo date("l", mktime(0, 0, 0, 1, 1, 2000));

echo "<br>";

// 3. Menampilkan jumlah detik dari tanggal tertentu hingga sekarang
// Gantilah parameter mktime dengan tanggal tertentu
echo time() - mktime(0, 0, 0, 1, 1, 2000);

echo "<br>";

// 4. Menampilkan tanggal 1 Januari tahun depan
echo date("l, d-m-y", mktime(0, 0, 0, 1, 1, date("Y") + 1));

echo "<br>";

// 5. Menampilkan tanggal 1 Januari tahun lalu
echo date("l, d-m-y", mktime(0, 0, 0, 1, 1, date("Y") - 1));

echo "<br>";
echo date("l, d-m-y H:i:s", mktime(10, 30, 0, 8, 15, 2021));

?>