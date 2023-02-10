<?php 
// mengatur default timezone menggunakan fungsi date_default_timezone_set()
date_default_timezone_set('Asia/jakarta');

$sekarang = new DateTime('now');
echo $sekarang->format('d-m-Y, H:i:s');