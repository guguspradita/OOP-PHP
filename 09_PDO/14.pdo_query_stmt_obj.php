<?php 
// penanganan error database try and catch
// PDO::query() untuk memproses hasil dari query SELECT, 
// serta query lain seperti INSERT, UPDATE dan DELETE.
try {
    $pdo = new PDO("mysql:host=localhost;dbname=ilkom;", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM barang";  
    $stmt = $pdo->query($query);

    var_dump($stmt);

} catch (PDOException $e){
    echo "Koneksi / Query bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
}