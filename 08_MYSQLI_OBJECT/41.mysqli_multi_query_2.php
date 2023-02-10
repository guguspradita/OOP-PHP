<?php 
// Koneksi ke database "ilkom"
$mysqli = new mysqli("localhost", "root", "", "ilkom");

// generate tanggal hari ini
$tanggal = new DateTime('Now', new DateTimeZone('Asia/Jakarta'));
$timestamp = $tanggal->format('Y-m-d H:i:s');

// Jalankan 3buah query 
$query = "INSERT INTO barang
        (nama_barang, jumlah_barang, harga_barang, tanggal_update) VALUES
        ('Harddisk External Wd My Passport 2TB', 5, 112000, '$timestamp');
        UPDATE barang SET jumlah_barang = 15, tanggal_update = '$timestamp'
        WHERE id_barang = 3;
        UPDATE barang SET harga_barang = 4500000, tanggal_update = '$timestamp'
        WHERE id_barang = 5;
        ";

$mysqli->multi_query($query);

echo "Terdapat " . $mysqli->affected_rows . " baris yang ditambah <br>";

// proses sinkronisasi dengan MYSQL (akibat $mysqli->multi_query)

while ($mysqli->more_results()){
    $mysqli->next_result();
}

// ambil semua data di tabel barang
$query = "SELECT * FROM barang";
$result = $mysqli->query($query);
$arr = $result->fetch_all(MYSQLI_ASSOC);