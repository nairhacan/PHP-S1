<?php
// pengambilan mehtod GET DAN POST 
// luang lingkup variable 

// jika penulisna variable

// maka cara menampilkan nya
// tapi jika peulisan nya dengan fuction?
// function tampilx() {
//     echo $x;
// }
// // tidak akan tampil cara nya mendeteksi variable X yang ada di atas menggunkan key global $_nama_variable; contoh
// $x 10;
// function tampilx() {
//     global $x;
// }

// tampilx();



// selanjut nya ada variable super global

// $_GET                
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV    
?>

<?php  
// variable milik php meryupakan array asccosiataip

// $_Get

// $_GET["nama"] = "nairha";
// $_GET["nrp"] = "0192873";
var_dump($_GET);

// cara memasukan data ke arrray asosaitip

// ini adalah cara ke dua memasukan data ke $_GET
// cara nya adalah membuak url pada web  dan di depan php beri tanda tanya
                    // http://localhost/phpdasar/petemuan3/post_mehtod.php? 
// di lanjut seperti ini



                    // http://localhost/phpdasar/petemuan3/post_mehtod.php?nama=Nairha shaffa



// dan akan tampil pada vardump 


// array(1) { ["nama"]=> string(13) "nairha shaffa" }
 



// jika ingin menmabah kan data yang lain tinggal di depan nya tambah kan (&) icon dan contoh

                    //http:localhost/phpdasar/petemuan3/post_mehtod.php?nama=nairha%20shaffa&nrp 0987678

// maka akan tampil

// array(2) { ["nama"]=> string(13) "nairha shaffa" ["nrp_02983764378"]=> string(0) "" }

$mahasiswa =  [
    [
       "nama" => "sandika  galih",
       "nrp" => "0999997",
       "email" => "sandika@gamil",
       "jurusan" => "teknik informatika",
   ],
   [
       "nama" => "nairha.can",
       "nrp" => "09876567",
       "email" => "nairha@gamil",
       "jurusan" => "teknik informatika",
       "tugas" => [90, 80, 100]
   ]
   
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
            <?php foreach( $mahasiswa as $db) : ?>
            <li>
               <a href="post_hasil.php?nama=<?= $db["nama"]; ?>&nrp=<?= $db["nrp"]; ?>&email=<?= $db["email"]; ?>">
               
               nama<?= $db["nama"]; ?></a>
            </li>
            <?php endforeach; ?>
    </ul>
</body>
</html>