<!-- 


Perulangan (loop) adalah cara untuk menjalankan sekelompok perintah berulang kali, 
selama kondisi tertentu terpenuhi. 
Ini sangat berguna untuk menghemat waktu dan mengurangi duplikasi kode. 

enis-Jenis Perulangan di PHP
For Loop:      Perulangan dengan jumlah yang diketahui.
While Loop:    Perulangan dengan kondisi tertentu.
Do-While Loop: Sama seperti while, tetapi dijalankan setidaknya sekali.
Foreach Loop:  Digunakan khusus untuk array.

-->

<!-- 1 for loop -->
 <!--

 for (inisialisasi; kondisi; perubahan) {
    // kode yang diulang
}

-->
<!-- contoh sederhana -->
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Ini perulangan ke-$i<br>";
}
?>
<!-- maka hasil nya akan seperti ini -->
 <!--
Ini perulangan ke-1  
Ini perulangan ke-2  
Ini perulangan ke-3  
Ini perulangan ke-4  
Ini perulangan ke-5
 -->



 <!-- 2. While Loop -->
 <!-- 
Digunakan ketika jumlah perulangan tidak diketahui sebelumnya.
 Perulangan berjalan selama kondisi bernilai benar (true).
 -->

 <!--    cara penulisan nya
 
 while (kondisi) {
    // kode yang diulang
}

 
 -->
<!-- contoh sederhana -->
<?php
$angka = 1;

while ($angka <= 5) {
    echo "Angka: $angka<br>";
    $angka++; // Menambah nilai $angka
}
?>

<!-- maka hasil nya akan
 
Angka: 1  
Angka: 2  
Angka: 3  
Angka: 4  
Angka: 5


-->

<!-- 3. Do-While Loop -->
 <!-- 
 Sama seperti while, tetapi kode dijalankan setidaknya sekali, bahkan jika kondisi awal salah.
 -->
 <!--  cara penulisan nya
 
 do {
    // kode yang diulang
} while (kondisi);

 
 -->
<!-- contoh sederhana -->

<?php
$angka = 6;

do {
    echo "Angka: $angka<br>";
    $angka++;
} while ($angka <= 5);
?>

<!-- maka hasil nya akan
 
Angka: 6

-->
<!-- catatan
 >kode di jalan kan sekali meski kondisi salah 
-->

<!-- 4. Foreach Loop -->
 <!--
Digunakan untuk iterasi pada elemen array.
 -->
<!-- cara penulisan nya -->
<!-- 
 
foreach ($array as $nilai) {
    // kode yang diulang
}


-->

<!-- contoh sederhana -->
<?php
$buah = ["Apel", "Pisang", "Mangga"];

foreach ($buah as $b) {
    echo "Buah: $b<br>";
}
?>
<!-- maka hasil nya akan -->
 <!-- 

Buah: Apel  
Buah: Pisang  
Buah: Mangga

 -->


 <!-- latihan !!!!!
 

Gunakan for untuk mencetak angka dari 1 sampai 10.
Gunakan while untuk mencetak bilangan genap dari 2 sampai 20.
Gunakan foreach untuk mencetak daftar nama dalam array. 
 
 
 -->

 <!-- boom tamat -->
