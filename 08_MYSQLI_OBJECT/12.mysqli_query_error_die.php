<?php 
mysqli_report(MYSQLI_REPORT_STRICT);
try {
    $koneksi = new mysqli("localhost", "root", "");
    $query = "CREAT DATABASE IF NOT EXISTS ilkom";
    $koneksi->query($query);
    if ($koneksi->error){
        die ("Query bermasalah : " . $koneksi->error ." (" . $koneksi->errno . ")");
    }
} catch (Exception $e) {
    echo "Koneksi bermasalah: " . $e->getMessage() . " (".$e->getCode().")";
} finally {
    if (isset($koneksi)) {
        $koneksi->close();
    }
}