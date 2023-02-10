<?php 
mysqli_report(MYSQLI_REPORT_STRICT);
try {
    $koneksi = new mysqli("localhost", "root", "");
    echo "Jalankan query SQL...";
} catch (Exception $e) {
    echo "Koneksi bermasalah: " . $e->getMessage() . " (".$e->getCode().")";
} finally {
    if (isset($koneksi)) {
        $koneksi->close();
    }
}