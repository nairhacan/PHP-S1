


<?php
include 'koneksi.php';

$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

    <a href="tambah.php">tambah.php</a>

    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>gambar</th>
        </tr>
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                           <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')">Hapus</a> | 
                             <a href="#">ubah</a>
            </td>
                            <td><?= $row['nrp']; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['jurusan']; ?></td>
                            <td><img src="<?= $row['gambar']; ?>" alt="Gambar" width="100"></td>
                        </tr>      <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>

