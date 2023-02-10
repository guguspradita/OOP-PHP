<?php 
require "DB.php";
$DB = DB::getInstance();

// $DB->select('id_barang, nama_barang');
// $DB->orderBy('id_barang','DESC');
// $tabelBarang = $DB->get('barang');

// pemanggilan method chainning
// $tabelBarang = $DB->select('id_barang, nama_barang')->orderBy('id_barang', 'DESC')->get('barang');
$tabelBarang = $DB->select('nama_barang, harga_barang')->orderBy('nama_barang')->get('barang');

echo "<pre>";
    print_r($tabelBarang);
echo "</pre>";