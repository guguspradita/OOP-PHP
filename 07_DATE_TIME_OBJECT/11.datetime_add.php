<?php 
// DateTime::add() method dan DateInterval Class
// DateInterval adalah class khusus yang berisi durasi tanggal dan waktu

$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
echo $sekarang->format('d - m - Y'); echo "<br>";
$duaMinggu = new DateInterval('P2W'); // 2 minggu kedepan 
$sekarang->add($duaMinggu); // method add() membutuhkan DateInterval

echo $sekarang->format('d - m - Y');