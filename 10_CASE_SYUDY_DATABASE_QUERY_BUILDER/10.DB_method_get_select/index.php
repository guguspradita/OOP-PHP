<?php 
require "DB.php";

$DB = DB::getInstance();

// ambil seluruh kolom
// $tabelBarang = $DB->get('barang');

// pilih kolom nama_barang
// $namaBarang = $DB->select('nama_barang');
// $tabelBarang = $DB->get('barang');

// ambil kolom nama_barang, id_barang dan harga_barang
$DB->select('nama_barang,id_barang,harga_barang');
$tabelBarang = $DB->get('barang');

// ambil seluruh kolom
// $tabelBarang = $DB->get('barang');

echo "<pre>";
    print_r($tabelBarang);
echo "</pre>";