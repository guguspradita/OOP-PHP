<?php 
require "DB.php";
// koneksi kedatabase
$DB = DB::getInstance();

// tampilkan sebuah tabel barang getQuery() mengembalikan array object
// $tabelBarang = $DB->getQuery("SELECT * FROM barang WHERE id_barang = ?", [2]);
$tabelBarang = $DB->getQuery("SELECT * FROM barang");

echo "<pre>";
    print_r($tabelBarang);
echo "</pre>";

// kalau ingin mengembalikan array assoc jakankan runQuery()
// $tabelBarang = $DB->runQuery('SELECT * FROM barang WHERE id_barang = ?', [2]);
// $result = $tabelBarang->fetchAll(PDO::FETCH_ASSOC);

// // mengembalikan array assoc
// echo "<pre>";
//     print_r($result);
// echo "</pre>";