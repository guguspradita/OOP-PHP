<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "", "ilkom");

    // Ambil semua data di tabel barang
    $query = "SELECT * FROM barang";
    $result = $mysqli->query($query);
    
    // mengambil seluruh hasil query SELECT dan menyimpannya sebagai array 2 dimensi.
    $array = $result->fetch_all(); 

    echo "<pre>"; 
    print_r($array);
    echo "</pre>";
    
} catch (Exception $e){
    echo "Query / Koneksi bermasalah: " . $e->getMessage() . " (" . $e->getMessage() . ")";
} finally {
    if (isset($mysqli)){
        $mysqli->close();
    }
}