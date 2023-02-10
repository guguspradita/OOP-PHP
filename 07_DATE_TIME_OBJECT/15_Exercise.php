<?php 
// menampilkan 1000 hari dari tanggal sekarang.
$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
echo $sekarang->add(new DateInterval('P1000D'))->format('l, j F Y H:i:s');

echo "<br>";

// 9 tahun 9 bulan 9 hari 9 jam 9 menit dan 9 detik sejak tanggal 17 Agustus 1945 pukul 10:30.

$date = new DateTime('17-08-1945 10:30', new DateTimeZone('Asia/Jakarta'));
$durasi = new DateInterval('P9Y9M9DT9H9M9S');
echo $date->add($durasi)->format('l, j F Y H:i:s');