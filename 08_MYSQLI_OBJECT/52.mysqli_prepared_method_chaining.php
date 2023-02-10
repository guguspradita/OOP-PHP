<?php 
// Koneksi ke database "ilkom"
$mysqli = new mysqli("localhost", "root", "", "ilkom");

$query = "SELECT * FROM barang WHERE id_barang = ?";
// proses prepare
$stmt = $mysqli->prepare($query);

// proses bind
$id_barang = 5;
$stmt->bind_param('i', $id_barang);
// proses excecute
$stmt->execute();
// Proses menampilkan hasil query
$row = $stmt->get_result()->fetch_object();
echo $row->id_barang; echo " | ";
echo $row->nama_barang; echo " | ";
echo $row->jumlah_barang; echo " | ";
echo $row->harga_barang; echo " | ";
echo $row->tanggal_update; echo "<br>";


// Hapus memory dan tutup prepared statement
$stmt->free_result();
$mysqli->close();