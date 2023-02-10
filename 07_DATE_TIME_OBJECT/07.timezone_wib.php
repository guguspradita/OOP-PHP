<?php 

$zonaWib = new DateTimeZone('Asia/Jakarta');
$sekarang = new DateTime('now', $zonaWib);

echo $sekarang->format('d-m-Y, H:i:s');