<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "insrt";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}



function tambah($data) {
    global $conn;
      // ambil data dari elemen form
      $nrp = htmlspecialchars($data["nrp"]);
      $nama = htmlspecialchars($data["nama"]);  
      $email = htmlspecialchars($data["email"]);
      $jurusan = htmlspecialchars($data["jurusan"]);
      $gambar = $data["gambar"];
    
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$gambar', '$nrp', '$nama', '$email', '$jurusan')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

        



}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?>


