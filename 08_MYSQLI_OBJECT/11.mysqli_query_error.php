<?php 
mysqli_report(MYSQLI_REPORT_STRICT);
try {
    $koneksi = new mysqli("localhost", "root", "");
    $query = "CREAT DATABASE IF NOT EXISTS ilkom";
    $koneksi->query($query);
    echo "Pesan error MySQL : " . $koneksi->error;
    echo "<br><br>";
    echo "Nomor Error MySQL : " . $koneksi->errno;
} catch (Exception $e) {
    echo "Koneksi bermasalah: " . $e->getMessage() . " (".$e->getCode().")";
} finally {
    if (isset($koneksi)) {
        $koneksi->close();
    }
}