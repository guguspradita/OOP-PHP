<?php 

$sekarang = new DateTime('Now');
echo $sekarang->format('d-m-Y'); // 24-01-2023

echo "<br>";

$hariKemerdekaan = new DateTime('17 Aug 1945');
echo $hariKemerdekaan->format('d-m-Y'); // 17-08-1945

echo "<br>";

$akhirTahun = new DateTime('2023/12/31');
echo $akhirTahun->format('d-m-Y'); // 31-12-2023