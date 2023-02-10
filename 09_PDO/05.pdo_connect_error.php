<?php 
// koneksi ke database
$pdo = new PDO("mysql:host=localhost;port=3306;dbname=ilkom;", "root", "rahasia");
var_dump($pdo);