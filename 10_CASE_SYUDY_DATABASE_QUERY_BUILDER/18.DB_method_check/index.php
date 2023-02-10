<?php 
require "DB.php";
$DB = DB::getInstance();

// $result = $DB->check('barang', 'id_barang', 10);
// echo $result;

if ($DB->check('barang','id_barang','5')){
    echo "ID barang 5 tersedia";
}