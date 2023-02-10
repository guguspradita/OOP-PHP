<?php 
// koneksi kedatabase ilkom
$pdo = new PDO("mysql:host=localhost;dbname=ilkom", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// proses query
$query = "SELECT * FROM barang WHERE id_barang = ?";
$stmt = $pdo->prepare($query);

// proses bind dan execute
$stmt->execute([4]);

$arr = $stmt->fetchAll(PDO::FETCH_NUM);

echo "<pre>";
    print_r($arr);
echo "</pre>"; 