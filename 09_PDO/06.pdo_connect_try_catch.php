<?php 
// penanganan error database try and catch
try {
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=ilkom;", "root", "rahasia");
} catch (PDOException $e){
    echo "Koneksi / Query bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
}