<?php 
require "DB.php";
$DB = DB::getInstance();

$result = $DB->insert('barang', [
    'nama_barang' => 'Mouse Gaming Wirelles M200',
    'jumlah_barang' => 25,
    'harga_barang' => 210000
]);

if ($result){
    echo "Terdapat " . $DB->count() . " data yang ditambah";
    // Terdapat 1 data yang ditambah
}