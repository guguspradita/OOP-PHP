<?php 
// masuk mode strict mysqli
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "");
    $query = "CREATE DATABASE IF NOT EXISTS ilkom";
    $mysqli->query($query);
    if ($mysqli->error) {
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        echo "Database 'ilkom' sudah dibuat / sudah tersedia<br>"; 
    }
} catch (Exception $e) {
    echo "Koneksi / Query bermasalah : " . $mysqli->error . " (" . $mysqli->errno . ")";
} finally {
    if (isset($mysqli)){
        $mysqli->close();
    }
}