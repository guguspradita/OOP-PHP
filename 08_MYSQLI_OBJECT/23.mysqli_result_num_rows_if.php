<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "", "ilkom");

    // Ambil semua data di tabel barang
    $query = "SELECT * FROM barang where id_barang = 100";
    $result = $mysqli->query($query);
    if ($result->num_rows === 0) {
        echo "Data tidak ditemukan";
    } else {
        echo "Data tersedia ..";
    }

} catch (Exception $e){
    echo "Query / Koneksi bermasalah: " . $e->getMessage() . " (" . $e->getMessage() . ")";
} finally {
    if (isset($mysqli)){
        $mysqli->close();
    }
}