<?php 
// buat format tanggal hari ini
$tanggal = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$timestamp = $tanggal->format('Y-m-d H:i:s');

// koneksi ke database
$pdo = new PDO("mysql:host=localhost;dbname=ilkom;", "root", "");

// proses query
$query = "INSERT INTO barang (nama_barang, jumlah_barang,
            harga_barang, tanggal_update) VALUES (:nama, :jumlah, :harga, :tanggal)
";

// proses prepare
$stmt = $pdo->prepare($query);

// imput data 1
$nama = "Cosmos CRJ-8229 - Rice Cooker";
$jumlah = 25;
$harga = 299000;
$tanggal = $timestamp;

// proses bind dan execute
$stmt->execute([":nama" => $nama, ':jumlah' => $jumlah, 
                ':harga' => $harga, ':tanggal' => $tanggal]);
echo "Query Ok, " . $stmt->rowCount() . " baris berhasil ditambah <br>";

// input data 2
$arr_input = [
    'nama' => "Philips Blender HR 2157",
    'jumlah' => 12,
    'harga' => 629000,
    'tanggal' => $tanggal
];

// proses bind dan execute
$stmt->execute($arr_input);
echo "Query Ok, " . $stmt->rowCount() . " baris berhasil ditambah <br>";

echo "<hr>";

// tampilkan barang
$query = "SELECT * FROM barang";
// proses query 
$stmt = $pdo->query($query);

// proses ambil data dan tampilkan
while ($array = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $array["id_barang"]; echo " | ";
    echo $array["nama_barang"]; echo " | ";
    echo $array["jumlah_barang"]; echo " | ";
    echo $array["harga_barang"]; echo " | ";
    echo $array["tanggal_update"]; echo "<br>";
}