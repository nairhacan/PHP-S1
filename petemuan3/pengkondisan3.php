<!-- pengkondisian atau cabang -->
 <?php 
//  pengkodisaian ada dua jenis ada if dan else dan macam  nya adalah
// if else
// if else if else
// ternary
// swicth

$x = 10;
if ( $x < 20) {
    echo"benar";
    // apakah 20 lebih besar dari 10? maka akan tampil pada if (benar) sesuai apa yang ada di dalam 
    // if ($(variable) </> (nilai) ) jika hasil nya salah maka akan di tampilkan di bawah ( } ) dengan kode pwrirah echo 
}


// contoh salah nya 
echo"<hr>";

$y = 20;
if ( $y < 40) {
    echo"benar";
}
echo"salah";

echo"<hr>";

// baris di bawah ini yang menampikan (salah) akan tetap di jalan kan atau di tampilkan apa pun jawaban mau itu salah/benar
// agar mengatasi ini kita akan menggunakan steicment (else)
 ?>
 <!-- contoh dengan else -->
 <?php 
 $a = 20;
 if ( $a < 10) {
    echo"benar";
 }
else {
    echo"salah";
} 

echo"<hr>";
// jadi ini akan tampil sakah satu nya saja jika nilai nya true akan menampilkan if dan jika hasil nya false akan tampil else

 ?>

 <?php 
 $b = 20;
 if ( $b < 20) {
    echo"benar";
 }else if( $b == 20 ) {
    echo"binggo";
 }else {
    echo"salah";
 }
//  ini adalah cara penggunaan if ,else if,dan else

 echo"<hr>";
 
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel 5x5</title>
    <style>
        .warna-baris{
            background-color: red;
        }
    </style>
</head>
<body>
    <table border=1 cellpadding="10" cellspacing="0">
        <?php 
        // panjang baris ke bawah (row)
        for ($i = 1; $i <= 5; $i++) { 
        ?>
        <!-- table yang membaut warna BG sigzag menggunkana % dan modulus -->
        <?php if ( $i % 2 == 0) : 
        ?>
            <tr class="warna-baris" >
        <?php  else : ?>
                <tr></tr>
        <?php endif ?>
                <!-- panjang baris ke samping (col) -->
        <?php for ($j = 1; $j <= 5; $j++) { ?>
                    <td><?php echo "$i,$j"; ?></td>
        <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>








<!-- lebih flexsibel -->


<!--  -->
 <!-- if (kondisi) {
    // kode dijalankan jika kondisi benar
} else {
    // kode dijalankan jika kondisi salah
}  -->
<!--  -->
<!-- contoh sederhana lain -->
 <!-- (>) artinya lebih besar -->
  <!-- (<) artinya lebih kecil -->

<?php
$angka = -5;

if ($angka > -10) {
    echo "Angka adalah positif.";
} else {
    echo "Angka adalah negatif atau nol.";
};

echo"<hr>";
?>

<!-- pengkondisain kedua di ibarat kan sebagai ? -->
 
<!-- penulisan nya akan seperti ini -->

<!-- if (kondisi1) {
    // kode jika kondisi1 benar

} elseif (kondisi2) {
    // kode jika kondisi2 benar

} else {
    // kode jika semua kondisi salah
}
 -->

 <!-- contoh sederhana -->

 <?php
$nilai = 85;

if ($nilai >= 90) {
    echo "Nilai Anda: A";
} elseif ($nilai >= 80) {
    echo "Nilai Anda: B";
} elseif ($nilai >= 70) {
    echo "Nilai Anda: C";
} elseif ($nilai >= 60) {
    echo "Nilai Anda: D";
} else {
    echo "Nilai Anda: F";
}
?>


<!-- lebih sederhana -->


<?php
$angka = -10; // Masukkan angka di sini

if ($angka > 0) {
    echo "Angka positif.";
} elseif ($angka < 0) {
    echo "Angka negatif.";
} else {
    echo "Angka nol.";
}
?>

<!-- catatan -->
 <!--
 if      digunakan untuk memeriksa kondisi pertama.
elseif   memeriksa kondisi berikutnya jika kondisi pertama salah.
else     memberikan jawaban alternatif terakhir jika semua kondisi sebelumnya salah.
 -->

<!-- increment dan dicrement sederhana -->

<?php
// Increment
$a = 5; // Inisialisasi variabel $a dengan nilai 5
echo "Nilai awal a: " . $a . "<br>"; // Menampilkan nilai awal $a
$a++; // Menambahkan 1 ke nilai $a (post-increment)
echo "Nilai a setelah increment: " . $a . "<br>"; // Menampilkan nilai $a setelah increment

// Decrement
$b = 10; // Inisialisasi variabel $b dengan nilai 10
echo "Nilai awal b: " . $b . "<br>"; // Menampilkan nilai awal $b
$b--; // Mengurangi 1 dari nilai $b (post-decrement)
echo "Nilai b setelah decrement: " . $b . "<br>"; // Menampilkan nilai $b setelah decrement

// Pre-increment
$c = 7; // Inisialisasi variabel $c dengan nilai 7
echo "Nilai awal c: " . $c . "<br>"; // Menampilkan nilai awal $c
echo "Nilai c setelah pre-increment: " . ++$c . "<br>"; // Menambahkan 1 ke nilai $c (pre-increment) dan menampilkan hasilnya

// Post-increment
$d = 3; // Inisialisasi variabel $d dengan nilai 3
echo "Nilai awal d: " . $d . "<br>"; // Menampilkan nilai awal $d
echo "Nilai d setelah post-increment: " . $d++ . "<br>"; // Menampilkan nilai $d sebelum increment (post-increment)
echo "Nilai d setelah post-increment dieksekusi: " . $d . "<br>"; // Menampilkan nilai $d setelah increment dieksekusi

// Pre-decrement
$e = 15; // Inisialisasi variabel $e dengan nilai 15
echo "Nilai awal e: " . $e . "<br>"; // Menampilkan nilai awal $e
echo "Nilai e setelah pre-decrement: " . --$e . "<br>"; // Mengurangi 1 dari nilai $e (pre-decrement) dan menampilkan hasilnya

// Post-decrement
$f = 20; // Inisialisasi variabel $f dengan nilai 20
echo "Nilai awal f: " . $f . "<br>"; // Menampilkan nilai awal $f
echo "Nilai f setelah post-decrement: " . $f-- . "<br>"; // Menampilkan nilai $f sebelum decrement (post-decrement)
echo "Nilai f setelah post-decrement dieksekusi: " . $f . "<br>"; // Menampilkan nilai $f setelah decrement dieksekusi
?>





<!-- logika -->




<?php
// Operator Logika AND (&&)
// Mengembalikan true jika kedua kondisi benar
$umur = 25;
$pendapatan = 5000000;

if ($umur > 18 && $pendapatan > 3000000) {
    echo "Anda memenuhi syarat untuk mendapatkan kartu kredit.<br>";
} else {
    echo "Anda tidak memenuhi syarat untuk mendapatkan kartu kredit.<br>";
}

// Penjelasan:
// Kondisi pertama ($umur > 18) adalah true karena umur 25 lebih besar dari 18.
// Kondisi kedua ($pendapatan > 3000000) adalah true karena pendapatan 5000000 lebih besar dari 3000000.
// Karena kedua kondisi benar, maka hasilnya adalah true dan pesan "Anda memenuhi syarat untuk mendapatkan kartu kredit." akan ditampilkan.

// Operator Logika OR (||)
// Mengembalikan true jika salah satu kondisi benar
$nilaiMatematika = 70;
$nilaiBahasaInggris = 50;

if ($nilaiMatematika > 60 || $nilaiBahasaInggris > 60) {
    echo "Anda lulus ujian.<br>";
} else {
    echo "Anda tidak lulus ujian.<br>";
}

// Penjelasan:
// Kondisi pertama ($nilaiMatematika > 60) adalah true karena nilai 70 lebih besar dari 60.
// Kondisi kedua ($nilaiBahasaInggris > 60) adalah false karena nilai 50 tidak lebih besar dari 60.
// Karena salah satu kondisi benar, maka hasilnya adalah true dan pesan "Anda lulus ujian." akan ditampilkan.

// Operator Logika NOT (!)
// Membalikkan nilai boolean dari kondisi
$lampuMenyala = true;

if (!$lampuMenyala) {
    echo "Lampu mati.<br>";
} else {
    echo "Lampu menyala.<br>";
}

// Penjelasan:
// Variabel $lampuMenyala bernilai true.
// Operator NOT (!) membalikkan nilai true menjadi false.
// Karena kondisi menjadi false, maka pesan "Lampu menyala." akan ditampilkan.
?>

