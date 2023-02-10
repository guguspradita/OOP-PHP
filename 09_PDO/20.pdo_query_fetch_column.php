<?php 
// koneksi kedatabase ilkom
$pdo = new PDO("mysql:host=localhost;dbname=ilkom", "root", "");
// proses query
$query = "SELECT nama_barang FROM barang";
$stmt = $pdo->query($query);

// proses ambil data dari database
// mengembalikan array 1 kolom (bukan berbentuk baris)
while ($row = $stmt->fetch(PDO::FETCH_COLUMN)){
    echo $row . " | ";
}