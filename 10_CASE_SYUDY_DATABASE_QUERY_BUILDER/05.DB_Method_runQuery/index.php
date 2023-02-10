<?php 
require "DB.php";
$DB = DB::getInstance();

$result = $DB->runQuery("SELECT * FROM barang");
$tabelBarang = $result->fetchAll(PDO::FETCH_OBJ);

echo "<pre>";
    print_r($tabelBarang);
echo "</pre>";