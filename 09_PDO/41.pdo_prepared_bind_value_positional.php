<?php 
try {
    // koneksi ke database
    $pdo = new PDO("mysql:host=localhost;dbname=ilkom;", "root", "",
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    // PROSES QUERY
    $query = "SELECT * FROM barang WHERE id_barang = ? OR nama_barang = ?";

    // proses prepare
    $stmt = $pdo->prepare($query);

    // proses bind dan execute
    $stmt->bindValue(1, 5, PDO::PARAM_INT);
    $stmt->bindValue(2, "Printer Epson L220", PDO::PARAM_STR);
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