<?php 
// penanganan error database try and catch
try {
    $pdo = new PDO("mysql:host=localhost;dbname=ilkom;", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "DELETE FROM barang WHERE id_barang = 3";  
    $count = $pdo->exec($query);

    // cek apakah ada perubahan dari affected_row
    if ($count !== FALSE) { // $count mengembalikan (affected rows).
        echo "Query Ok, ada $count baris di hapus";
    } else {
        echo "Data masih kosong..";
    }
} catch (PDOException $e){
    echo "Koneksi / Query bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
}