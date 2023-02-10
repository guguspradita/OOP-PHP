<?php 
require "DB.php";

$DB = DB::getInstance();

$tabelBarang = $DB->getWhere('barang', ['id_barang', '=', 5]);

echo $tabelBarang->nama_barang; // error
// Cara pengaksesan yang benar adalah $tabelBarang[0]->nama_barang

// Secara internal, method getWhere() menggunakan method getQuery() untuk mengambil data,
// yakni menggunakan method fetchAll(PDO::FETCH_OBJ) dari PDO. Hasilnya, variabel
// $tabelBarang berisi array dari object, bukan hanya object saja.