<?php 
// PDOStatement::rowCount() untuk mengetahui jumlah baris yang terdampak (affected rows)
try {
    // Koneksi ke database
    $pdo = new PDO("mysql:host=localhost;dbname=ilkom", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // query kedatabase
    $query = "UPDATE barang SET jumlah_barang = 20";
    $stmt = $pdo->query($query);

    // cek apakah ada data yang dirubah
    if ($stmt !== FALSE){
        echo "Query Ok, ada " . $stmt->rowCount() . " baris yang di update";
    }
} catch (Exception $e) {
    "Query / Koneksi bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
}