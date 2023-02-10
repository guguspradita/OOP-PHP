<?php 

date_default_timezone_set('Asia/Jakarta');

$sekarang = new DateTimeImmutable('now');
$sekarang->add(new DateInterval('P3W'));
$sekarang->modify('-1 month');
echo $sekarang->format('j F Y');
