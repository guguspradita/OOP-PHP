<?php 
// menambah 1 hari
$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$sekarang->modify('1 day');
echo $sekarang->format('j F Y');