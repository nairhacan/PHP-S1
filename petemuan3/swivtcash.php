<?php  
// Contoh penggunaan switch case 

// switch ($lampu) {
//     case 'merah':
//         echo"sialakan berhenti";
//         break;
//     case 'kuning':
//         echo"bersiap lah";
//         break;
//     case 'hijau':
//         echo"appyyyy goooooooooo!!!!!!!";
//         break;
    
//     default:
//         echo"tidak ada apa apa";
//         break;
//     } 

$nilai = 3;

switch( $nilai) {
    case 1:
        $sisi = 20;
        $hasil = $sisi * $sisi;
        echo "anda memilih $nilai  <br>";
        echo"menghitung luas persegi <br>";
        echo"rumus nya sisi x sisi <br>";
        echo"nilai sisi nya adalah $sisi <br>";
        echo"luas nya adalah $hasil <br>";
        break;
    case 2:
        $alas =  20;
        $tinggi =  25;
        $hasil = 0.5 * $alas * $tinggi ;
        echo "anda memilih $nilai  <br>";
        echo"menghitung luas persegi <br>";
        echo"rumus nya sisi x sisi <br>";
        echo"nilai alas nya adalah $alas <br>";
        echo"nilai tinggi nya adalah $tinggi";
        echo"luas nya adalah $hasil <br>";
        
        break;

    case 3:
        $jari = 7;
        $hasil = 3.14 * $jari * $jari;
        echo "anda memilih $nilai  <br>";
        echo"menghitung luas persegi <br>";
        echo"rumus nya sisi x sisi <br>";
        echo"nilai jari jari  nya adalah $jari <br>";
        echo"luas nya adalah $hasil <br>";
        break;
    
    default:
        echo"hasil tidak ada";
        break;
}


// cara berbeda


$nilai = 3;
function luas_persergi($sisi) {
    return $sisi * $sisi;
}

function Luas_Segitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

function Luas_Lingkaran($jari) {
    return 3.14 * $jari * $jari;
}

echo "<h2>Menghitung Luas</h2>";
echo "<hr>";

switch ($nilai) {
    case 1:
        $sisi = 20;
        $hasil = Luas_Persegi($sisi);
        echo "<strong>Anda memilih $nilai: Menghitung Luas Persegi</strong><br>";
        echo "Rumus: sisi x sisi<br>";
        echo "Nilai sisi: $sisi<br>";
        echo "Luasnya adalah: <strong>$hasil</strong><br>";
        break;

    case 2:
        $alas = 20;
        $tinggi = 25;
        $hasil = Luas_Segitiga($alas, $tinggi);
        echo "<strong>Anda memilih $nilai: Menghitung Luas Segitiga</strong><br>";
        echo "Rumus: 0.5 x alas x tinggi<br>";
        echo "Nilai alas: $alas<br>";
        echo "Nilai tinggi: $tinggi<br>";
        echo "Luasnya adalah: <strong>$hasil</strong><br>";
        break;

    case 3:
        $jari = 7;
        $hasil = Luas_Lingkaran($jari);
        echo "<strong>Anda memilih $nilai: Menghitung Luas Lingkaran</strong><br>";
        echo "Rumus: π x jari-jari x jari-jari<br>";
        echo "Nilai jari-jari: $jari<br>";
        echo "Luasnya adalah: <strong>$hasil</strong><br>";
        break;

    default:
        echo "<strong>Pilihan tidak ditemukan!</strong><br>";
        echo "Silakan pilih angka 1, 2, atau 3 untuk perhitungan.";
        break;
}

?>
