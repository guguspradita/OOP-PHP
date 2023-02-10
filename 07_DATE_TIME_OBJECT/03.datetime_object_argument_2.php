<?php 

$hariKemerdekaan = new DateTime('17 Aug 1945');
$hariKemerdekaan_1 = new DateTime('17 August 1945');
$hariKemerdekaan_2 = new DateTime('17-08-1945');
$hariKemerdekaan_3 = new DateTime('17AUG1945');
$hariKemerdekaan_4 = new DateTime('1945-08-17');

echo $hariKemerdekaan->format('d-m-Y'); echo "<br>"; // 17-08-1945
echo $hariKemerdekaan_1->format('d-m-Y'); echo "<br>"; // 17-08-1945
echo $hariKemerdekaan_2->format('d-m-Y'); echo "<br>"; // 17-08-1945
echo $hariKemerdekaan_3->format('d-m-Y'); echo "<br>"; // 17-08-1945
echo $hariKemerdekaan_4->format('d-m-Y'); echo "<br>"; // 17-08-1945