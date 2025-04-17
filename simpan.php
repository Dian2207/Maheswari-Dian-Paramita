<?php
$data = json_decode(file_get_contents("data.json"), true);

$data[] = [
  "nama" => $_POST['nama'],
  "jumlah" => (int)$_POST['jumlah']
];

file_put_contents("data.json", json_encode($data, JSON_PRETTY_PRINT));
header("Location: index.php");
?>
