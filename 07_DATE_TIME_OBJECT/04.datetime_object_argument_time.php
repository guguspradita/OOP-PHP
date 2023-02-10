<?php 

$sekarang = new DateTime(); 
$hariKemerdekaan = new DateTime('17 AUG 1945 11:30');
$nantiMalam = new DateTime('10:30 PM');
$tahunBaru = new DateTime('01-01-2023');
$akhirTahun = new DateTime('31 Dec 2022 11:59:59');


echo $sekarang->format('d-m-Y, H:i:s'); echo "<br>";
echo $hariKemerdekaan->format('d-m-Y, H:i:s'); echo "<br>";
echo $nantiMalam->format('d-m-Y, H:i:s'); echo "<br>";
echo $tahunBaru->format('d-m-Y, H:i:s'); echo "<br>";
echo $akhirTahun->format('d-m-Y, H:i:s'); echo "<br>";
