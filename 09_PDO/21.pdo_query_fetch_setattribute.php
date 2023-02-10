<?php 
// koneksi kedatabase ilkom
$pdo = new PDO("mysql:host=localhost;dbname=ilkom", "root", "");
// set attribute
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// proses query
$query = "SELECT * FROM barang";
$stmt = $pdo->query($query);

// proses ambil data dari database
// mengembalikan array 1 kolom (bukan berbentuk baris)
while ($row = $stmt->fetch()){
    echo $row["id_barang"]; echo " | ";
    echo $row["nama_barang"]; echo " | ";
    echo $row["jumlah_barang"]; echo " | ";
    echo $row["harga_barang"]; echo " | ";
    echo $row["tanggal_update"]; echo "<br>";
}