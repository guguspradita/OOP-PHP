<?php 
try {
    // koneksi ke database
    $pdo = new PDO("mysql:host=localhost;dbname=ilkom;", "root", "",
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    // PROSES QUERY
    $query = "SELECT * FROM barang WHERE id_barang = :id OR nama_barang = :nama";

    // proses prepare
    $stmt = $pdo->prepare($query);

    // proses bind dan execute
    $stmt->bindValue('id', 3, PDO::PARAM_INT);
    $stmt->bindValue('nama', "Cosmos CRJ-8229 - Rice Cooker", PDO::PARAM_STR);
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