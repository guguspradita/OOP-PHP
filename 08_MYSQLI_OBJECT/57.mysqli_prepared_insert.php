<?php 
// Koneksi ke database "ilkom"
$mysqli = new mysqli("localhost", "root", "", "ilkom");
$tanggal = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$timestamp = $tanggal->format('Y-m-d H:i:s');


// proses prepare
$stmt = $mysqli->prepare("INSERT INTO barang 
(nama_barang, jumlah_barang, harga_barang, tanggal_update)
VALUES (?,?,?,?)");

// proses bind
$stmt->bind_param('siis', $nama_barang, $jumlah_barang, $harga_barang, $timestamp);
$nama_barang = "Sharp Microwave Oven R-728(K)";
$jumlah_barang = 20;
$harga_barang = 1250500;

// proses execute
$stmt->execute();
echo "Terdapat " . $mysqli->affected_rows . " baris yang di tambah<br>";

// Hapus memory dan tutup prepared statement
$stmt->free_result();
$mysqli->close();