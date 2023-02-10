<?php 
// Koneksi ke database "ilkom"
$mysqli = new mysqli("localhost", "root", "", "ilkom");

// proses prepare
$stmt = $mysqli->prepare("SELECT * FROM barang WHERE nama_barang LIKE ? ");

// proses bind
$nama_barang = "%kulkas%";
$stmt->bind_param('s', $nama_barang);

// proses excecute
$stmt->execute();

// Proses menampilkan hasil query

$result = $stmt->get_result();
while ($row = $result->fetch_assoc()){
    echo $row["id_barang"]; echo " | ";
    echo $row["nama_barang"]; echo " | ";
    echo $row["jumlah_barang"]; echo " | ";
    echo $row["harga_barang"]; echo " | ";
    echo $row["tanggal_update"];
    echo "<br>";
}

// Hapus memory dan tutup prepared statement
$stmt->free_result();
$mysqli->close();