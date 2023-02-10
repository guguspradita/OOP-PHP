<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "", "ilkom");

    // Ambil semua data di tabel barang
    $query = "SELECT * FROM barang";
    $result = $mysqli->query($query);
    
    // ambil semua data dalam bentuk mysqli_num
    $row = $result->fetch_row();

    echo "<pre>"; 
    print_r($row);
    echo "</pre>";

} catch (Exception $e){
    echo "Query / Koneksi bermasalah: " . $e->getMessage() . " (" . $e->getMessage() . ")";
} finally {
    if (isset($mysqli)){
        $mysqli->close();
    }
}