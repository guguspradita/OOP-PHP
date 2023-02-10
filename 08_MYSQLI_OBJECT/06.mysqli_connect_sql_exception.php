<?php 
mysqli_report(MYSQLI_REPORT_STRICT);
try {
    $koneksi = new mysqli("localhost", "root", "X");
    echo "Jalankan query SQL...";
} catch (Exception $e) {
    echo "Koneksi bermasalah: " . $e->getMessage() . " (".$e->getCode().")";
}