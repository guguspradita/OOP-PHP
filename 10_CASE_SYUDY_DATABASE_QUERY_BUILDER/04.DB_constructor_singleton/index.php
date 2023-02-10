<?php 
require "DB.php";

// singleton pattern
$DB = DB::getInstance();
$DB = DB::getInstance(); // class DB hanya bisa di-instansiasi satu kali saja
$DB = DB::getInstance(); // class DB hanya bisa di-instansiasi satu kali saja

echo "<pre>";
    var_dump($DB); // berisi object dari class DB
echo "</pre>";