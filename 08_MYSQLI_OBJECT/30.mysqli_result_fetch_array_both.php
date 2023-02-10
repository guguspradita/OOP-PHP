<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "", "ilkom");

    // Ambil semua data di tabel barang
    $query = "SELECT * FROM barang";
    $result = $mysqli->query($query);
    
    // ambil semua data dalam bentuk mysqli_num
    while ($row = $result->fetch_array(MYSQLI_BOTH)) { // nama lain dari method $result->fetch_row():
        echo $row["id_barang"]; echo " | ";
        echo $row[1]; echo " | ";
        echo $row["nama_barang"]; echo " | ";
        echo $row[2]; echo " | ";
        echo $row["jumlah_barang"]; echo " | ";
        echo $row[3]; echo " | ";
        echo $row["harga_barang"]; echo " | ";
        echo $row[4]; echo " | ";
        echo $row["tanggal_update"];
        echo "<br>";
    }
    
} catch (Exception $e){
    echo "Query / Koneksi bermasalah: " . $e->getMessage() . " (" . $e->getMessage() . ")";
} finally {
    if (isset($mysqli)){
        $mysqli->close();
    }
}