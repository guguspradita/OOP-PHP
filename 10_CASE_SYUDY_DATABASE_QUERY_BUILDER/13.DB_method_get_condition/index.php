<?php 
require "DB.php";

$DB = DB::getInstance();

// $tabelBarang = $DB->get('barang'); // ambil semua isi tabel barang
// $tabelBarang = $DB->orderBy('harga_barang', 'DESC')->get('barang');

// $tabelBarang = $DB->select('nama_barang, harga_barang')->get('barang');
// $tabelBarang = $DB->get('barang','WHERE id_barang = ?', [2]);

$DB->select('nama_barang, jumlah_barang, harga_barang');
$DB->orderBy('nama_barang'); // default ASC
$tabelBarang = $DB->get('barang', 'WHERE harga_barang > ?', [700000]);

echo "<pre>";
    print_r($tabelBarang);
echo "</pre>";