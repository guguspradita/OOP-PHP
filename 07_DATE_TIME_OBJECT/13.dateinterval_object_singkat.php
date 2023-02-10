<?php 
$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$sekarang->add(new DateInterval('P3Y1M2W')); // 3 Tahun 1 Bulan 2 Minggu 
echo $sekarang->format('j F Y'); // method format untuk menampilkan tanggal dan waktu

echo "<br>";

$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta')); 
$sekarang->add(new DateInterval('P300D')); // 300 Hari
echo $sekarang->format('j F Y'); // method format untuk menampilkan tanggal dan waktu
?>