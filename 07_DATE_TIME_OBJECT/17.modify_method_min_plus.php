<?php 
// menambah 1 bulan
$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
echo $sekarang->modify('+1 month')->format('j F Y');

echo "<br>";

// mengurangi 1 bulan
$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
echo $sekarang->modify('-1 month')->format('j F Y');