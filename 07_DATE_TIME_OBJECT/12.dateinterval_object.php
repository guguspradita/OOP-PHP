<?php 
$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$durasi = new DateInterval('P3Y1M2W'); // 3 Tahun 1 Bulan 2 Minggu 
$sekarang->add($durasi);
echo $sekarang->format('d - m - Y'); // method format untuk menampilkan tanggal dan waktu

echo "<br>";

$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$durasi = new DateInterval('P300D'); // 300 Hari
$sekarang->add($durasi);
echo $sekarang->format('j F Y'); // method format untuk menampilkan tanggal dan waktu
?>