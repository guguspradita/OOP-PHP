<?php 
require "DB.php";
// pemanggilan koneksi kedatabase
$DB = DB::getInstance();

$result = $DB->runQuery("SELECT * FROM barang WHERE id_barang = ? OR id_barang = ?", [4, 5]);
$tabelBarang = $result->fetchAll(PDO::FETCH_OBJ);

echo "<pre>"; 
    print_r($tabelBarang);
echo "</pre>";