<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "", "ilkom");

    // Ambil semua data di tabel barang
    $query = "SELECT * FROM barang";
    $result = $mysqli->query($query);
    
    // ambil semua data dalam bentuk mysqli_num
    $row = $result->fetch_row();

    echo $row[0]; echo " | ";
    echo $row[1]; echo " | ";
    echo $row[2]; echo " | ";
    echo $row[3]; echo " | ";
    echo $row[4];

} catch (Exception $e){
    echo "Query / Koneksi bermasalah: " . $e->getMessage() . " (" . $e->getMessage() . ")";
} finally {
    if (isset($mysqli)){
        $mysqli->close();
    }
}