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
$result = $stmt->get_result();
$row = $result->fetch_row();
echo $row[0] ." | ". $row[1] . " | ". $row[2] . " | " . $row[3]. " | ".$row[4]; echo "<br>";

$id_barang = 2;
$stmt->execute();
// Proses menampilkan hasil query
$result = $stmt->get_result();
$row = $result->fetch_row();
echo $row[0] ." | ". $row[1] . " | ". $row[2] . " | " . $row[3]. " | ".$row[4]; 

// Hapus memory dan tutup prepared statement
$stmt->free_result();
$mysqli->close();