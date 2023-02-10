<?php 

mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "X");
    $query = "CREATE DATABASE IF NOT EXISTS ilkom";
    $mysqli->query($query);
    // cek apakah query database berhasil?
    if (isset($mysqli->error)) {
        throw new Exception($mysqli->error, $mysqli->errno);
    }
} catch (Exception $e) {
    echo "Query Bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
} catch (mysqli_sql_exception $e) {
    echo "Koneksi Bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
} finally {
    if (isset($mysqli)){
        $mysqli->close();
    }
}