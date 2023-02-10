<?php 
$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
// 3 Tahun 1 Bulan 2 Minggu 
// method format untuk menampilkan tanggal dan waktu
// penulisan dengan method chaining
echo $sekarang->add(new DateInterval('P3Y1M2W'))->format('j F Y'); 


echo "<br>";

$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta')); 
// 300 Hari
// method format untuk menampilkan tanggal dan waktu
// penulisan dengan method chaining
echo $sekarang->add(new DateInterval('P300D'))->format('j F Y'); 
?>