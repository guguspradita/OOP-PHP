<?php 
try {
    // koneksi ke database
    $pdo = new PDO("mysql:host=localhost;dbname=ilkom;", "root", "",
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    // PROSES QUERY
    $query = "SELECT * FROM barang ORDER BY harga_barang LIMIT :batas";

    // proses prepare
    $stmt = $pdo->prepare($query);

    // proses bind dan execute
    $stmt->bindParam('batas', $batas, PDO::PARAM_INT);
    $batas = 4;
    $stmt->execute();

    // proses ambil data dan tampilkan
    while ($array = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $array["id_barang"]; echo " | ";
    echo $array["nama_barang"]; echo " | ";
    echo $array["jumlah_barang"]; echo " | ";
    echo $array["harga_barang"]; echo " | ";
    echo $array["tanggal_update"]; echo "<br>";
    }
} catch (Exception $e){
    echo "Query / Koneksi bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
}