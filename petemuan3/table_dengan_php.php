                                                                                             <!-- pengulangan khusu aray-->
<?php 
// pengulanagn ada 4 jenis for, while,do..while,foreach :
    
    // ini pengulanagan utuk kata ke samping 

// kita masukan terlebih dahulu nominal nya dengan perintah seperti ini {for(   )}
for( $i = 0; $i < 5; $i++ ) 
// kemudain di masukan apa yang ingin di tampilkan dengan kode ( { echo "lorem"}  ) menggunkana tutup jarjang
{
    echo "hello world <br>" ;
}
// bisa mendambah kan <br> agar kata nya ke bawah tapi di dalam tanda kutip { "lorem <br>" }

?>
                                                                                    <!-- pengulangan menggunakan while -->
 <?php  
//  penulisan pengulanagan menggukana while
$i = 0;
while ($i < 5) {
    echo "hello world2 <br>";
$i++;
}

 
 ?>
                                                                               <!-- penggulanagan menggunkan do..while -->
<?php 
// penulisan nya 
$i = 0;
do {
    echo "hello world3 <br>";
$i++;
} while ($i <= 5);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border="1" cellpadding="10" cellspacing="0">
    <?php 
    for ($i = 1; $i <= 3; $i++) { 
        echo"<tr>";
        for ($j = 1; $j <= 5; $j++) { 
            echo "<td>$i,$j</td>";
        }
        echo"</tr>";
    }
    ?>

</table>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>

 <table border="1" cellpadding="10" cellspacing="0">
 <?php for ($i = 1; $i  <=3 ; $i++) { ?>
        <tr>
            <?php for($j = 1; $j <= 5; $j++) {?>
                <td>
                    <?php echo "$i,$j" ?>
                </td>
            <?php }   ?>
        </tr>
        <?php }    ?>
 </table>
</body>
</html>

<?php 

echo "<br>";
$_COOKIE["nama"] = "rafu";
echo $_COOKIE["nama"];



?>

