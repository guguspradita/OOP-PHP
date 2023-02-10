<?php 
// placeholder dikenal sebagai named parameter
// named parameter, kita bisa menggunakan "nama" yang diawali dengan tanda titik dua
// sebagai penanda placeholder, seperti ":id", ":nama", atau ":harga_barang".

$pdo = new PDO("mysql:host=localhost;dbname=ilkom;", "root", "");

// proses query
$query = "SELECT * FROM barang where jumlah_barang < :jumlah OR harga_barang < :harga";

// proses prepare
$stmt = $pdo->prepare($query);

// proses bind dan execute
$stmt->execute(['jumlah' => 50, 'harga' => 5000000]);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row["id_barang"]; echo " | ";
    echo $row["nama_barang"]; echo " | ";
    echo $row["jumlah_barang"]; echo " | ";
    echo $row["harga_barang"]; echo " | ";
    echo $row["tanggal_update"]; echo "<br>";
}