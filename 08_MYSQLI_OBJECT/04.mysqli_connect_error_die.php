<?php 
$koneksi = new mysqli("localhost", "root", "X");
if ($koneksi->connect_error) {
    // die ("Koneksi bermasalah '( $koneksi->connect_errno )' $koneksi->connect_error");
    die ("Koneksi Bermasalah");
}

echo "Jalankan query SQL...";