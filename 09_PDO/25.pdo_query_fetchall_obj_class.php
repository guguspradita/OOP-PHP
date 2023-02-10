<?php 
// koneksi kedatabase ilkom
$pdo = new PDO("mysql:host=localhost;dbname=ilkom", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// proses query
$query = "SELECT * FROM barang";
$stmt = $pdo->query($query);

$row = $stmt->fetchAll(PDO::FETCH_CLASS);

echo "<pre>";
    print_r($row);
echo "</pre>";