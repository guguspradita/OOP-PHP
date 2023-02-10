<?php 
mysqli_report(MYSQLI_REPORT_STRICT);
try {
    // koneksi kedatabase "ilkom"
    $mysqli = new mysqli("localhost", "root", "", "ilkom");

    // proses prepare
    $stmt = $mysqli->prepare("SELECT * FROM barang WHERE id_barang = ? ");

    // proses bind
    $stmt->bind_param('i', $id_barang);
    $id_barang = 5;

    // proses excecute
    $stmt->execute();
    
    // proses menampilkan data array
    $result = $stmt->get_result(); // berisi object hasil pemprosesan prapare statement
    
    // cek apakah ada error pada query
    if ($mysqli->error){
        throw new Exception($mysqli->error, $mysqli->errno);
    } else {
        while ($row = $result->fetch_assoc()){
            echo $row["id_barang"]; echo " | ";
            echo $row["nama_barang"]; echo " | ";
            echo $row["jumlah_barang"]; echo " | ";
            echo $row["harga_barang"]; echo " | ";
            echo $row["tanggal_update"]; 
            echo "<br>";
        }
    }
    // hapus memory dan tutup prepared statement
    $stmt->free_result();
    
} catch (Exception $e) {
    echo "Koneksi / Query bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
} finally {
    if (isset($mysqli)){
        $mysqli->close();
    }
}