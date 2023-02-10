<?php 
require "DB.php";

$DB = DB::getInstance();

$result = $DB->update('barang', [
    "nama_barang" => "Dummy product", 
    "harga_barang" => 999999],
    ["id_barang", "=", "7"]
);

if ($result) {
    echo "Terdapat " . $DB->count() . " baris yang di ubah";
    // Terdapat 1 baris yang di ubah
}