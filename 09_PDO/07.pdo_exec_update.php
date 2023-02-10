<?php 
// PDO::exec() hanya bisa dipakai untuk query yang tidak mengembalikan hasil, 
// seperti query INSERT, UPDATE dan DELETE.
try {
    // koneksi kedatabase ilkom
    $pdo = new PDO("mysql:host=localhost;dbname=ilkom;", "root", "");

    // proses query
    $query = "UPDATE barang SET jumlah_barang = 70 WHERE id_barang = 3";  
    $count = $pdo->exec($query);
    // cek apakah tidak kosong (0)
    if ($count !== FALSE) { // $count mengembalikan (affected rows).
        echo "Query Ok, ada $count baris di update";
    } else {
        echo "Data masih kosong..";
    }
} catch (PDOException $e){
    echo "Koneksi / Query bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
}