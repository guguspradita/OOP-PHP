<?php 

$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
echo "Waktu WIB " . $sekarang->format('d-m-Y, H:i:s'); // Waktu Indonesia Barat

echo "<br>";

$sekarang = new DateTime('now', new DateTimeZone('Asia/Makassar'));
echo "Waktu WITA " . $sekarang->format('d-m-Y, H:i:s'); // Waktu Indonesia Tengah

echo "<br>";

$sekarang = new DateTime('now', new DateTimeZone('Asia/Jayapura'));
echo "Waktu WIT " . $sekarang->format('d-m-Y, H:i:s'); // Waktu Indonesia Timur