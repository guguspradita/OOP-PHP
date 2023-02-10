<?php
// set agar error menggunakan Exception
mysqli_report(MYSQLI_REPORT_STRICT);   

try {
    $mysqli = new mysqli('localhost', 'root', '' , 'cobalagi');
} catch (mysqli_sql_exception $e) {
    echo "Hasil pesan kesalahan adalah: " . $e->getMessage();
}
