<?php 
require "DB.php";
$DB = DB::getInstance();

// pemanggilan method chainning
// $tabelBarang = $DB->get('barang'); // menampilkan kolom nama_barang dari tabel barang

// $DB->select('nama_barang');
// $tabelBarang = $DB->get('barang');

// pemanggilan method chaining
$tabelBarang = $DB->select('nama_barang, harga_barang')->get('barang');

echo "<pre>"; 
    print_r($tabelBarang);
echo "</pre>"; 