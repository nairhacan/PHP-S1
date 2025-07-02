                                                            <!-- jangan lupa untuk menyimpan { ; } titik koma saat inggin meakhir syntaks -->
<?php  
// pertemuan 2 _ PHP Dasar
// sintaks PHP


                                                                                                                             // standar outpu 

// {echo, print} di gunkaan untuk mencetak kata tanda {"}untuk varchar (kata) tanda{none /tidak ada} bisa untuk angka int
// { echo true; } untuk menampilkan angka 1
// { echo false; } untuk menampilkan halaman kosong 
// {var_dump("lprem"); } untuk memberikan informasi string dan kata yang di print vardump juga bisa di pakai untuk dubging
// {print_r} harus menggunakan kurung : print_r ("lorem")



// penulisan sintaks php di dalam html kita bisa tulis php dan php bisa ketik di html

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>halo <?php $nama ?></h1>
</body>
</html>
                                                                                                   <!-- fariabel dan tipde data -->
 <?php 
//  penulisan variable di tulis dengan tanda { $_____ = "nilai_yang di masukan"; di sebut (string) }
// variabel tidak bolhe diawali dengan angka tapi boleh mengandung angka
// contoh <?php  $nama1 ="lorem" ? > tidak boleh <?php $1nama ="lorem" ? >
// penulisan int tidak mengandung ("") tapi polos (--) contoh $int =100 
// contoh lain dari string $var = "hello world"


 $nama = "davin";
//  kemudain pada HTML kita bisa simpan variable nya agar tampil nilai yang sudah kita tetap kan pada variable contoh 
// penulisan nya ( ini HTML(  <h1>halo <?php echo $___ ;  )   ) maka akan tampil pada halaman html nilai yang sudag ada pada html
// pastikan jika menulis variable dan nilai nya berada di atas HTML karna tidak akan kebaca
 ?><!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <h1>hallo <?php echo $nama;  ?></h1>
 </body>
 </html>

 <!-- tanda kutip dua ( "" )  lebih sakti dari kutip satu  ( '' )  ini di sebut interpolaksi contoh -->
  <?php echo "hallo, nama saya $nama"; 
// maka si tanda ("") bisa menyimpan variabel meski dalam perintah output sedangkan memakai ( '' ) akan menampilkan 
// tanda $_____ pada layar dalam artian membaca nya seperti bisasa yang di tulis   
?>
                                                                                                                           <!-- operator  -->
<?php 
// opetarator ini ada banyak ada aritmatika,kurang (-),tambah(+),kali(*),ada bagi (/),ada moculus(%)
// contoh
echo 1 + 1;
// atau di buat dulu variable nya 
$x = 10;
$y = 20;
$z = 30;
// ini perkalian
echo $x * $y;
// ini bagi
echo $x / $y;
// ini moculus
echo $x % $y;


?>
                                                                               <!--  operator penggabungan string / concatenation / concat -->
 <?php  
//  operator nya itu menggunakan titik ( . )
$nama_depan = "Nairha";
$nama_belakang = "shafaa";
// jika 
echo $nama_depan . $nama_belakang;
// maka akan tampil dua dua nya tapi menempel jika ingin di pisah
echo $nama_depan . " " . $nama_belakang;
 ?>

                                                                                                                  <!-- operator assigment(penugasan) -->
<?php  
// operator nya ada samadengan(=),tambah samadengan(+=),kurang samadengan(-=),kali samadengan(*=),bagi samadengan(/=),
// moculus samadengan(%=) dan titik sama dengan (.=) jika =
$x = 1;
$x = 5;
echo $x; 
// maka hasli nya akan 5 karna (x1)itu di timpa maka jika 
$y = 1;
$y += 5;
echo $y;
// maka hasli nya akan ditambah dalam artian tidak di tumpuk dan bisa di baca 

// bisa juga operator string di pakai di assigment jika dalam contoh
// { echo $nama_depan . " " . $nama_belakang; } kita ubah ke assigment maka penulisan nya
$nama = "nazwa";
$nama .= " ";
$nama .= "teler";
echo $nama
?>
                                                                                                                <!-- operator perbadingan -->
<?php   
// operator perbandingan ada  lebih besar dari (<), lebih kecil dari (>),lebih besar samadengan (<=),i samadengan (!=)
// lenbih kecil sama dengan (>=) dan samadengan samadengan (==)
var_dump(1 < 5); 
// maka akan mucul nilai true (lebih besar)
var_dump(1 >5);
// maka akan mucul nilai false (libih kecil)
var_dump(1 == "1");
// maka string ini tidak akan di hitung karna intiger
var_dump(1 <= 5);
// hasil nya true
var_dump(1 >= 5);

// cara penulisan nya dalam kurung { var_dump(1 >= 5) } utamakan nilai nya dulu yang akan di banding kan (>,<) baru bisa (=,==)



?>
                                                                                                                          <!-- identitas -->
<?php 
//identitas ada (===),(!==)

var_dump(1 === "5");
// untuk mengecek tipe data dan ini nilai nya false


?>                                                                                                                           
                                                                                                                        <!-- operator logika -->
<?php 
// ada tiga macam ada dan(&&),ore (||),note (!)
$x = 30;
// kemudian di chek apakah X lebih kecil dari 20
var_dump($x < 20 && $x % 2 == 0 );
// maka nilai nya true 
var_dump($x < 20 || $x % 2 == 0 );

?>     
<?php  
$po = 30;
$k = 100;

echo $k + $po;

?>

