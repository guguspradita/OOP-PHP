<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

$tanggal = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$timestamp = $tanggal->format('Y-m-d H:i:s');

try {
    // Koneksi ke database "ilkom"
    $mysqli = new mysqli("localhost", "root", "", "ilkom");
    // Tampilkan isi tabel sebelum transaction
    echo "<h3>Sebelum Transaction</h3>";
    $result = $mysqli->query("SELECT * FROM barang");
    while ($row = $result->fetch_row()){
        echo $row[0]." | ".$row[1]. " | ".$row[2]. " | ".$row[3]. " | ".$row[4];
        echo "<br>";
    }
    echo "<hr>";

    // mulai transaction
    $mysqli->begin_transaction();
    $mysqli->query("DELETE FROM barang WHERE id_barang = 2");
    $mysqli->query("DELETE FROM barang WHERE id_barang = 4");
    $mysqli->query("INSERT INTO barang VALUES 
    (NULL, 'Sharp Microwave Oven R-728(K)',20,1250500,'$timestamp') ");

    // tampilkan isi tabel transaction
    echo "<h3>di dalam Transaction</h3>";
    $result = $mysqli->query("SELECT * FROM barang");
    while ($row = $result->fetch_row()){
        echo $row[0]." | ".$row[1]. " | ".$row[2]. " | ".$row[3]. " | ".$row[4];
        echo "<br>";
    }
    echo "<hr>";

    // batalkan query transaction
    $mysqli->rollback();

    // Tampilkan isi tabel di setelah transaction
    echo "<h3>Setelah Transaction</h3>";
    $result = $mysqli->query("SELECT * FROM barang");
    while ($row = $result->fetch_row()){
        echo $row[0]." | ".$row[1]. " | ".$row[2]. " | ".$row[3]. " | ".$row[4];
        echo "<br>";
    }
} catch (Exception $e) {
    echo "Koneksi / Query bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
} finally {
    if (isset($mysqli)){
        $mysqli->close();
    }
}