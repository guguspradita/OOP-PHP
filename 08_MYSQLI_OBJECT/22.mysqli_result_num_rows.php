<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "", "ilkom");

    // Ambil semua data di tabel barang
    $query = "SELECT * FROM barang where id_barang = 1";
    $result = $mysqli->query($query);
    
    // tampilkan jumlah baris dan kolom 
    echo "Terdapat ". $result->field_count . " kolom & " . $result->num_rows . " Baris";

} catch (Exception $e){
    echo "Query / Koneksi bermasalah: " . $e->getMessage() . " (" . $e->getMessage() . ")";
} finally {
    if (isset($mysqli)){
        $mysqli->close();
    }
}