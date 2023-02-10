<?php 
// koneksi kedatabase ilkom
$pdo = new PDO("mysql:host=localhost;dbname=ilkom", "root", "");
// proses query
$query = "SELECT * FROM barang";
$stmt = $pdo->query($query);

$row = $stmt->fetchAll(PDO::FETCH_NUM);

echo "<pre>";
    print_r($row);
echo "</pre>";