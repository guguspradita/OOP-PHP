<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "x");
    $query = "CREATE DATABASE IF NOT EXISTS ilkom";
    $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }
} catch (Exception $e){
    echo "Koneksi / Query bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
} finally {
    if (isset($mysqli)){
        $mysqli->close();
    }
}