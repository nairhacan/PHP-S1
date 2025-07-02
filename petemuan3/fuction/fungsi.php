
<?php 

// Function: perkenalan
// Description: Menampilkan sapaan perkenalan default.
// Output: 
// - Menampilkan teks sapaan "asalamualaikum", 
//   nama default "Davin", dan pesan perkenalan.

// Function: kenalan
// Parameters:
// - $nama (string): Nama yang akan diperkenalkan.
// - $salam (string): Sapaan yang akan digunakan.
// Description: Menampilkan sapaan perkenalan dengan nama dan salam yang diberikan.
// Output:
// - Menampilkan teks sapaan sesuai parameter $salam, 
//   nama sesuai parameter $nama, dan pesan perkenalan.
// membuat fungsion


function perkenalan() {
    echo "asalamualaikum ";
    echo "perkenal kan nama saya Davin  <br>";
    echo "senang berkenalan dengan anda <br>";
};

perkenalan();
echo "<hr>";


// membuat fungsi para meter dengan Vairabel

function kenalan($nama, $salam)  {
    echo "  <u>" . $salam . "</u>,";
    echo "perkenal kan nama saya <u> " . $nama . "</u><br>";
    echo "senang berkenalan dengan anda <br>";   
}

kenalan("nairha", "hai..........");
echo "<hr>";




// penggait para meter bila nilai default tidak ada atau ridak di isi

function kenalanyuk($nama, $salam = "<u>asalamualaikum</u>")  {
    echo  $salam . ",";
    echo "perkenal kan nama saya <u> " . $nama . "</u> <br>";
    echo "senang berkenalan dengan anda <br>";   
}

kenalanyuk("arga", );
echo "<hr>";



function penjumlahan($tahun_lahir, $tahun_skrg, )
{
    $hasil = $tahun_skrg - $tahun_lahir ;
    return $hasil;
}

echo "umur saya adalah <u>" . penjumlahan(2009, 2025,) . "</u>;";


// latihan

function luas($panjang, $lebar) {
    $slr = $panjang * $lebar;
    echo "luas persegi panjang dengan panjang <u>" . $panjang . "</u> dan lebar <u>" . $lebar . "</u> adalah "  ;
    return $slr;
}

echo "<hr>";
 echo "<u>". luas(20,5) ."</u>";




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        u {
            color: blue;
        }
        </style>
</head>
<body>
    
    </body>
</html>