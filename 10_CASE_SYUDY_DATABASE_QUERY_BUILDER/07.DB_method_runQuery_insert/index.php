<?php 
require "DB.php";
// koneksi kedatabase
$DB = DB::getInstance();

$query = ("INSERT INTO barang (nama_barang, jumlah_barang, harga_barang)
            VALUES (?,?,?)");
$arr = ['Cosmos CRJ-8229 - Rice Cooker', 4, 299000];

// jalankan proses insert
$result = $DB->runQuery($query, $arr);

// jalankan tampil data
$result = $DB->runQuery("SELECT * FROM barang");
$tabelBarang = $result->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
    print_r($tabelBarang);
echo "</pre>";