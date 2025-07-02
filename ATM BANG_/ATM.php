<?php
session_start(); // Memulai sesi

//  Set saldo awal 
if (!isset($_SESSION['duit'])) {
    $_SESSION['duit'] = 5000000;
}

//  Daftar harga pembayaran
$intr = [
    'pulsa' => 5000,
    'listrik' => 10000,
    'internet' => 15000
];

// Variabel untuk pesan dan riwayat transaksi terakhir
$pesan = ''; // nilai nya kosong karna akan di isi dengan notif
$riwayat = null;

// # Ambil data redirect dari sesi jika ada (hasil transaksi sebelumnya)
if (isset($_SESSION['flash'])) {
    $pesan = $_SESSION['flash']['pesan'];
    $riwayat = $_SESSION['flash']['riwayat'];
    unset($_SESSION['flash']); // Hapus data  agar tidak terduplikasi
}

// # Proses jika form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pin = $_POST['pin']; // Ambil PIN dari form
    $transaksi = $_POST['transaksi'] ?? ''; // Jenis transaksi (tarik/setor/pilih)
    $jumlah = (int)($_POST['jumlah'] ?? 0); // Jumlah uang
    $pilih = $_POST['pilih'] ?? ''; // Jenis pembayaran
    $status = 'Gagal'; // Default status transaksi

    // # Validasi PIN
    if ($pin == '1') {
        // # Tarik tunai
        if ($transaksi == 'tarik') {
            if ($_SESSION['duit'] >= $jumlah) {
                $_SESSION['duit'] -= $jumlah;
                $pesan = "Tarik tunai Rp " . number_format($jumlah, 0, ',', '.') . " berhasil.";
                $status = 'Berhasil';
            } else {
                $pesan = "Saldo tidak cukup!";
            }

        // # Setor tunai
        } elseif ($transaksi == 'setor') {
            $_SESSION['duit'] += $jumlah;
            $pesan = "Setor tunai Rp " . number_format($jumlah, 0, ',', '.') . " berhasil.";
            $status = 'Berhasil';

        // # Pembayaran (pulsa/listrik/internet)
        } elseif ($transaksi == 'pilih' && isset($intr[$pilih])) {
            $biaya = $intr[$pilih];
            if ($_SESSION['duit'] >= $biaya) {
                $_SESSION['duit'] -= $biaya;
                $pesan = "Pembayaran untuk $pilih sebesar Rp " . number_format($biaya, 0, ',', '.') . " berhasil.";
                $status = 'Berhasil';
            } else {
                $pesan = "Saldo tidak cukup untuk bayar $pilih.";
            }
            $jumlah = $biaya; // Tetapkan jumlah sesuai harga
        } else {
            $pesan = "Transaksi tidak dikenali.";
        }

    } else {
        $pesan = "PIN salah!";
    }

    // # Simpan hasil transaksi ke session (flash data)
    $_SESSION['flash'] = [
        'pesan' => $pesan,
        'riwayat' => [
            'waktu' => date('Y-m-d H:i:s'),
            'aksi' => ($transaksi == 'tarik') ? 'Tarik Tunai' :
                      (($transaksi == 'setor') ? 'Setor Tunai' :
                      (($transaksi == 'pilih') ? "Bayar: $pilih" : '-')),
            'jumlah' => $jumlah,
            'saldo' => $_SESSION['duit'],
            'status' => ($pin != '1') ? 'PIN Salah' : $status
        ]
    ];

    // # Redirect agar data POST tidak dikirim ulang saat refresh
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// # Fungsi untuk menampilkan tanggal + nama hari
function dateHari() {
    $hari = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];
    $tanggal = date('Y-m-d H:i:s');
    return $hari[date('w')] . ', ' . $tanggal;
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>ATM Bank Manja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('https://futureskills.id/wp-content/uploads/2023/02/pengaturan-perbankan-730x411.jpg');
            background-size: cover;
            background-position: center;
        }
        .card {
            width: 30rem;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="card">
    <h4 class="text-center mb-4">ATM Bank Manja</h4>

    <form method="POST">
        <div class="form-group">
            <label>PIN:</label>
            <input type="password" name="pin" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Saldo Anda:</label>
            <input type="text" class="form-control" value="Rp <?= number_format($_SESSION['duit'], 0, ',', '.') ?>" disabled>
        </div>

        <div class="form-group">
            <label>Jenis Transaksi:</label><br>
            <input type="radio" name="transaksi" value="tarik" id="tarik" required>
            <label for="tarik">Tarik Tunai</label> &nbsp;

            <input type="radio" name="transaksi" value="setor" id="setor">
            <label for="setor">Setor Tunai</label> &nbsp;

            <input type="radio" name="transaksi" value="pilih" id="showDropdown">
            <label for="showDropdown">Pilih Pembayaran</label>

            <br>
            <select id="dropdown" name="pilih" style="display: none;" class="form-control mt-2">
                <option value="">-- Pilih --</option>
                <option value="pulsa" data-harga="5000">Pulsa 5.000</option>
                <option value="listrik" data-harga="10000">Listrik 10.000</option>
                <option value="internet" data-harga="15000">Internet 15.000</option>
            </select>
        </div>

        <div class="form-group">
            <label>Jumlah (Rp):</label>
            <input type="number" name="jumlah" class="form-control" id="jumlah" required>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Proses</button>
    </form>

    <?php if ($pesan): ?>
        <div class="alert alert-info mt-3">
            <?= $pesan ?>
        </div>
    <?php endif; ?>

    <?php if ($riwayat): ?>
        <hr>
        <h5 class="text-center">Riwayat Transaksi</h5>
        <table class="table table-bordered mt-3">
            <thead class="thead-light">
                <tr>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                    <th>Jumlah</th>
                    <th>Saldo Akhir</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= dateHari() ?></td>
                    <td><?= $riwayat['aksi'] ?></td>
                    <td>Rp <?= number_format($riwayat['jumlah'], 0, ',', '.') ?></td>
                    <td>Rp <?= number_format($riwayat['saldo'], 0, ',', '.') ?></td>
                    <td><?= $riwayat['status'] ?></td>
                </tr>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<script>
    //mengambil elemen dari HTML
    const radioPilih = document.getElementById('showDropdown');
    const dropdown = document.getElementById('dropdown');
    const tarik = document.getElementById('tarik');
    const setor = document.getElementById('setor');
    const jumlahInput = document.getElementById('jumlah');

    function toggleDropdown() {
        dropdown.style.display = radioPilih.checked ? 'block' : 'none';
        if (!radioPilih.checked) jumlahInput.value = '';
    }

    //ini ket: Auto-set jumlah jika dropdown dipilih
    dropdown.addEventListener('change', function () {
        const selected = dropdown.options[dropdown.selectedIndex];
        const harga = selected.getAttribute('data-harga');
        jumlahInput.value = harga || '';
    });

    tarik.onclick = toggleDropdown;
    setor.onclick = toggleDropdown;
    radioPilih.onclick = toggleDropdown;
</script>

</body>
</html>
<!-- | Tanda | Nama                     | Fungsi                                                                  |
| ----- | ------------------------ | ----------------------------------------------------------------------- |
| `? :` | Ternary operator         | Kondisi if-else versi singkat                                           |
| `??`  | Null coalescing operator | Kasih **nilai default** kalau data yang dicek **kosong atau tidak ada** | -->
