<!DOCTYPE html>
<html>
<head>
  <title>Data Angpau Dika</title>
</head>
<body>
  <h2>Data Angpau Dika</h2>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>Nama Pemberi</th>
      <th>Jumlah (Rp)</th>
      <th>Aksi</th>
    </tr>
    <?php
    // Ambil data dari file JSON
    $data = json_decode(file_get_contents("data.json"), true);
    $targetData = json_decode(file_get_contents("target.json"), true);
    $target = $targetData['target'];

    // Urutkan berdasarkan jumlah terbesar ke terkecil
    usort($data, function($a, $b) {
      return $b['jumlah'] - $a['jumlah'];
    });

    $total = 0;

    foreach ($data as $index => $row) {
      $style = ($row['jumlah'] >= 100000) ? "style='background-color: #c3f7c3;'" : "";

      echo "<tr $style>
              <td>{$row['nama']}</td>
              <td>" . number_format($row['jumlah'], 0, ',', '.') . "</td>
              <td>
                <a href='hapus.php?id=$index'>Hapus</a>
                <a href='tambah.php?id=$index'>Tambah</a>
              </td>
            </tr>";
      $total += $row['jumlah'];
    }
    ?>

    <!-- Tampilkan Total -->
    <tr>
      <td><strong>Total Saldo Akhir</strong></td>
      <td><strong><?php echo "Rp " . number_format($total, 0, ',', '.'); ?></strong></td>
      <td></td>
    </tr>
  </table>

  <br>

  <!-- Informasi Target -->
  <?php
    $status = $total >= $target ? 
              "<span style='color: green;'>✅ Target Tercapai!</span>" : 
              "<span style='color: red;'>❌ Belum Tercapai</span>";
  ?>

  <h3>Target Angpau: Rp <?= number_format($target, 0, ',', '.') ?></h3>
  <h3>Status: <?= $status ?></h3>

</body>
</html>
