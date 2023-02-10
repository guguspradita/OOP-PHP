<?php 
$_GET["id_barang"] = "5";
$id_barang = $_GET["id_barang"];
// Koneksi ke database "ilkom"
$mysqli = new mysqli("localhost", "root", "", "ilkom");

// ambil data di tabel barang
$query = "SELECT * FROM barang WHERE id_barang = $id_barang";
$result = $mysqli->query($query);

while ($row = $result->fetch_assoc()){
    echo $row["id_barang"]; echo " | ";
    echo $row["nama_barang"]; echo " | ";
    echo $row["jumlah_barang"]; echo " | ";
    echo $row["harga_barang"]; echo " | ";
    echo $row["tanggal_update"]; 
    echo "<br>";
}
$result->free();