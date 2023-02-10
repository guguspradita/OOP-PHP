<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "");
    $query = "CREATE DATABASE IF NOT EXISTS ilkom";
    $mysqli->query($query);
    if ($mysqli->error){
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Database 'ilkom' sudah dibuat / sudah tersedia<br>";
    }

    // pilih database "ilkom"
    $mysqli->select_db('ilkom');
    if ($mysqli->error){
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Database 'ilkom' berhasil dipilih. <br>";
    }
} catch (Exception $e) {
    echo "Koneksi / Query bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
} finally {
    // tutup koneksi
    if (isset($mysqli)){
        $mysqli->close();
    }
}