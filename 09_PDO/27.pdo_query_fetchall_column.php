<?php 
// koneksi kedatabase ilkom
$pdo = new PDO("mysql:host=localhost;dbname=ilkom", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// proses query
$query = "SELECT nama_barang FROM barang";
$stmt = $pdo->query($query);

$cols = $stmt->fetchAll(PDO::FETCH_COLUMN);

echo "<pre>";
    print_r($cols);
echo "</pre>";