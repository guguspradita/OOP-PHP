<?php 
require "DB.php";

$DB = new DB(); // langsung menjalankan constructor

echo "<pre>";
    var_dump($DB); // berisi object dari class DB
echo "</pre>";