<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Radio Show Card</title>
  <style>
    .card {
      display: none;
      width: 200px;
      padding: 15px;
      margin-top: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
    }
    .radio-group {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

<div class="radio-group">
  <label>
    <input type="radio" name="option" onclick="showCard()"> Pilih Saya
  </label>
</div>

<div id="card" class="card">
  <h4>Ini Card</h4>
  <p>Ini adalah isi card kecil setelah radio diklik.</p>
</div>

<script>
function showCard() {
  document.getElementById('card').style.display = 'block';
}
</script>

</body>
</html>


<!-- ================================================================== -->
<?php
// Data harga sederhana
$harga = [
    'buah' => ['Apel' => 10000, 'Jeruk' => 8000],
    'sayur' => ['Bayam' => 5000, 'Wortel' => 6000],
    'minuman' => ['Teh Botol' => 7000, 'Air Mineral' => 3000]
];

// Cek jika form dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kategori = $_POST['kategori'];
    $item = $_POST['item'];
    $hargaItem = $harga[$kategori][$item] ?? 0;

    echo "Lokasi: Locat 5<br>";
    echo "Kategori: $kategori<br>";
    echo "Item: $item<br>";
    echo "Harga: Rp " . number_format($hargaItem, 0, ',', '.') . "<hr>";
}
?>

<form method="POST">
    <label>Kategori:</label>
    <select name="kategori">
        <option value="buah">Buah</option>
        <option value="sayur">Sayur</option>
        <option value="minuman">Minuman</option>
    </select><br><br>

    <label>Item:</label>
    <select name="item">
        <!-- Buah -->
        <option value="Apel">Apel</option>
        <option value="Jeruk">Jeruk</option>
        <!-- Sayur -->
        <option value="Bayam">Bayam</option>
        <option value="Wortel">Wortel</option>
        <!-- Minuman -->
        <option value="Teh Botol">Teh Botol</option>
        <option value="Air Mineral">Air Mineral</option>
    </select><br><br>

    <button type="submit">Kirim</button>
</form>
