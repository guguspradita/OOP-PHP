<?php 
// koneksi kedatabase ilkom
$pdo = new PDO("mysql:host=localhost;dbname=ilkom", "root", "");
// proses query
$query = "SELECT * FROM barang";
$stmt = $pdo->query($query);
// proses ambil data dari database
while ($row = $stmt->fetch(PDO::FETCH_OBJ)){
    echo $row->id_barang; echo " | ";
    echo $row->nama_barang; echo " | ";
    echo $row->jumlah_barang; echo " | ";
    echo $row->harga_barang; echo " | ";
    echo $row->tanggal_update; echo "<br>";
}