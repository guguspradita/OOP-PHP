<?php 

date_default_timezone_set('Asia/Jakarta');

$sekarang = new DateTimeImmutable('now');
echo $hasil1 = $sekarang->add(new DateInterval('P2W'))->format('j F Y');

echo "<br>";

echo $hasil2 = $sekarang->modify('-1 month')->format('j F Y');