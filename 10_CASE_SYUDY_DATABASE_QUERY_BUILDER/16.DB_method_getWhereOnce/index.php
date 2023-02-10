<?php 
require "DB.php";

$DB = DB::getInstance();

$tabelBarang = $DB->getWherOnce('barang', ['id_barang', '=', 3]);

echo $tabelBarang->nama_barang; 