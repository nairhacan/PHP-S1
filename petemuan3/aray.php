<?php 
// varaibel yang dapat meliki banyak nilai
$nama = "ilman";
// untuk membuat array ada cara lama
$hari = array("senin","selasa","rabu");
$bulan = array("januari","frbuari","maret");
// cara baru

$arr1 = [123, "tulisan" ];
// array boleh tipe data beda

// menampilkan array 
// menggunkan var_dump dan parint_r()
var_dump($hari);

// pasangan antara key dan value
// key adalah index yang pasti di muali dari angka )

echo "<br>";
print_r($bulan);

echo "<br>";
echo $arr1[0];
echo "<br>";
echo $bulan[2];

// menambah kan elemn baru pada array

// jika sudah ada varible 
$tahun = array("kemerdekann","penjajahan","ilman");
// maka jika ingin di tambah
var_dump($tahun);
$tahun[] = "indonesia";
var_dump($tahun);


// arrray by (pak ute)

$buah = [];
$hobi = [];

// membuat array sekaligus mengisi nya
$minuman = ["kopi", "teh", "juruk"];
$makanan = ["nasi goreng", "soto", "bubur"];

// membuat array dengan mengisi index rertentu
$anggota[1] = "ilman";
$anggota[2] = "sandi";
$anggota[3] = "nairha";

// membuat array asosiatif
$menu = [
    "makanan" => "nasi goreng",
    "minuman" => "kopi", 
];

// cetak array biasa
echo $minuman[0] .  "<br>";

// cetak array asosiatif
echo "<h2>" . $menu["makanan"] . "</h2>";

// cetak menggunakan perulangan
foreach ($menu as $dahar) {
    echo $dahar . "<br>";
}



echo "<br> <h1>  list buah yang tersedia </h1>";

$list = [ "apel", "pisang", "jeruk"
];

foreach ($list as $mn) {
    echo $mn . "<br>";
}

echo "<br> saya suka " . $list[0] . "<br>";


echo "<br> <br>";
echo "<h1> nama nama hari dalam seminggu </h1>";

$days = [
    "senin",
    "selasa",
    "rabu",
    "kamis",
    "jumat",
    "sabtu",
    "minggu"
];


    foreach ($days as $hari) {
        echo $hari . "<br>";
    }


    echo "<br> <br>";
    $desimal = 1000;
    $oktal = decoct($desimal);
    $biner = decbin($desimal);
    $hax = dechex($desimal);

    echo "ini adalah desimal dari nilai $desimal menjadi nilai oktal $oktal.<br>";
    echo "ini adalah desimal dari nilai $desimal menjadi nilai biner $biner.<br>";
    echo "ini adalah desimal dari nilai $desimal menjadi nilai hexsa $hax.<br>";

    // Mengembalikan ke nilai desimal
    $desimalDariOktal = octdec($oktal);
    $desimalDariBiner = bindec($biner);
    $desimalDariHexa  = hexdec($hax);

    echo "nilai oktal $oktal dikonversi kembali menjadi desimal $desimalDariOktal.<br>";
    echo "nilai biner $biner dikonversi kembali menjadi desimal $desimalDariBiner.<br>";
    echo "nilai hexsa $hax dikonversi kembali menjadi desimal $desimalDariHexa.";


?>













<!-- latihan 1 -->
<?php 

$angka = [3,2,15,20,11,77,89,10];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php for($i = 0; $i < 7; $i++) { ?>
        <div class="div"><?php   echo $angka[$i]; ?></div>
    <?php  } ?>
<!-- parameter di depan variable (jumlah yang akan di tampilakn dalam variable tertntu bisa )
  menggunakan count untuk menghitung sendiri jumlah variable yang akan di tamplikan sebagai contoh misal
  parameter nya ada (6)  maka akan menampilkan 6 variabel dalam araay jika menggunakan count {count($_variabrl);} maka akan 
  menghasil kan jumlah variable secra otomatis -->
  <!-- contoh -->
   <br> <br> <br> <br>
  <?php for($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?php   echo $angka[$i]; ?></div>
    <?php  } ?>
    <!-- harus nya ini akan ada 8 variable dan yang atas akan ada 7 sesuai dengan jumlah yang di masukan -->
    



    <div class="clear">
        <br> <br>


        <!-- ini adalah versi kedua yang ringkas  -->

<?php foreach ($angka as $a) {  ?>
    <div class="kotak">  <?php echo $a; ?> </div>
<?php } ?>


<div class="clear"></div>
<br> <br>

<!-- dan ini adalah versi yang sangat ringkas -->
<?php foreach ($angka as $a) : ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php endforeach; ?>

    </div>
</body>
</html>