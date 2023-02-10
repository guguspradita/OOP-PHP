<?php 
// method diff() dipakai untuk menghitung selisih tanggal & waktu

date_default_timezone_set('Asia/Jakarta'); // set jam Asia/Jakarta

$tanggal_1 = new DateTime('19-01-2000');
$tanggal_2 = new DateTime('23-02-2023');

$interval = $tanggal_1->diff($tanggal_2);
echo $interval->format('%a hari');
echo "<br>";
echo $interval->format('%y tahun %m bulan %a hari');
echo "<br>";
echo $interval->format('%y tahun %m bulan');