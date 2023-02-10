<?php 
require "DB.php";

$DB = DB::getInstance();

// pemanggilan method chainning
// $tabelBarang = $DB->select('nama_barang, jumlah_barang')->getWhere('barang', ['id_barang', '=', 5]);
$tabelBarang = $DB->getWhere('barang', ['id_barang', '<=', 4]);


echo "<pre>";
    print_r($tabelBarang);
echo "</pre>";