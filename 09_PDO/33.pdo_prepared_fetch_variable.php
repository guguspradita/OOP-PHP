<?php 
// koneksi kedatabase ilkom
$pdo = new PDO("mysql:host=localhost;dbname=ilkom", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// proses query
$query = "SELECT * FROM barang WHERE id_barang = ? OR nama_barang = ?";
$stmt = $pdo->prepare($query);

// proses bind dan execute
$id = 4;
$nama_barang = "TV Samsung 43NU7090 4K";
$stmt->execute([$id, $nama_barang]);

while ($arr = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $arr["id_barang"]; echo " | ";
    echo $arr["nama_barang"]; echo " | ";
    echo $arr["jumlah_barang"]; echo " | ";
    echo $arr["harga_barang"]; echo " | ";
    echo $arr["tanggal_update"]; echo "<br>";
}
