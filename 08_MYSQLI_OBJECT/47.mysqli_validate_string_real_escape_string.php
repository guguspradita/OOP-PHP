<?php 

$_GET["nama_barang"] = "Buku Moody's";
try {
    $mysqli = new mysqli("localhost", "root", "", "ilkom");
    $nama_barang = $mysqli->real_escape_string($_GET["nama_barang"]);

    // ambil data di tabel barang
    $query = "SELECT * FROM barang WHERE nama_barang = '$nama_barang'";
    $result = $mysqli->query($query);

    // cek apakah ada error pada query
    if ($mysqli->error){
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        if ($result->num_rows === 0){
            echo "Data tidak ditemukan"; 
        } else {
            echo "Data ditemukan";
        }
    }
} catch (Exception $e) {
    echo "Koneksi / Query bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
} finally {
    if (isset($mysqli)){
        $mysqli->close();
    }
}