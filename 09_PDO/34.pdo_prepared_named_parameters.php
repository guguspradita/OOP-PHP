<?php 
// placeholder dikenal sebagai named parameter
// named parameter, kita bisa menggunakan "nama" yang diawali dengan tanda titik dua
// sebagai penanda placeholder, seperti ":id", ":nama", atau ":harga_barang".

// koneksi ke database
$pdo = new PDO("mysql:host=localhost;dbname=ilkom;", "root", "");

// proses query
$query = "SELECT * FROM barang WHERE id_barang = :id OR nama_barang = :nama";

// proses prepare statement
$stmt = $pdo->prepare($query);

// proses bind dan execute
$stmt->execute(['id' => 1, 'nama' => "Laptop ASUS ROG GL503GE"]);

while ($row = $stmt->fetch(PDO::FETCH_NUM)){
    echo $row[0]." | ".$row[1]. " | ".$row[2]. " | ".$row[3]. " | ".$row[4];
    echo "<br>";
}