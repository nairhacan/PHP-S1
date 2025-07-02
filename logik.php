<?php
require 'functions.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $id = $_GET['id'];

    if ($action == 'hapus') {
        if (hapus($id) > 0) {
            echo "
                <script>
                    alert('Data berhasil dihapus!');
                    document.location.href = 'insert&delete.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data gagal dihapus!');
                    document.location.href = 'insert&delete.php';
                </script>
            ";
        }
    } elseif ($action == 'ubah') {
        // Logic for updating data can be added here
    }
}

function hapus($id) {
    global $con;
    mysqli_query($con, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($con);
}
?>