<?php 
// koneksi kedatabase
$pdo = new PDO("mysql:host=localhost;dbname=ilkom", "root", "");
// proses query
$query = "SELECT * FROM barang";
// PDO::query() untuk memproses hasil dari query SELECT, 
// serta query lain seperti INSERT, UPDATE dan DELETE.
$stmt = $pdo->query($query);

// proses ambil data
while ($row = $stmt->fetch(PDO::FETCH_NUM)){
    echo $row[0]; echo " | ";
    echo $row[1]; echo " | ";
    echo $row[2]; echo " | ";
    echo $row[3]; echo " | ";
    echo $row[4]; echo "<br>";
}