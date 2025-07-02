<?php 
// koneksi ke data base
$con = mysqli_connect("localhost", "root", "", "phpdasar");

function query($con, $query) {
    global $con;
    $resault = mysqli_query($con, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($resault)) {
        $rows[] = $row;
    }
    return $rows;
}


?>