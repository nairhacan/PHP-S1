<!-- agar tidak di masukaii prag  lain dengan menulis URL -->
<?php 
// cek apakah tidak ada data di $_GET
if ( !isset($_GET["nama"]) ) {
    // redirect
    header("location: post_mehtod.php");
    exit
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>
<body>
    <h1>Profile Page</h1>
    <form action="post_hasil.php" method="post">
        <ul>
            <li>
                <?= $_GET["nama"];  ?>
            </li>
            <li>
            <?= $_GET["nrp"]; ?>
            <li>
            <?= $_GET["email"]; ?>
            </li>
        </ul>
    </form>
</body>
</html>