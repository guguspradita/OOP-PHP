<?php 
try {
    // Koneksi ke database "ilkom"
    $mysqli = new mysqli("localhost", "root", "", "ilkom");
    $tanggal = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
    $timestamp = $tanggal->format('Y-m-d H:i:s');

    // proses prepare
    $stmt = $mysqli->prepare("INSERT INTO barang 
    (nama_barang, jumlah_barang, harga_barang, tanggal_update)
    VALUES (?,?,?,?)");

    // proses bind (input data ke 1); 
    $stmt->bind_param('siis', $nama_barang, $jumlah_barang, $harga_barang, $timestamp);
    $nama_barang = "Cosmos CRJ-8229 - Rice Cooker";
    $jumlah_barang = 7;
    $harga_barang = 299000;
    // proses execute
    $stmt->execute();
    echo "Terdapat " . $mysqli->affected_rows . " baris yang di tambah<br>";

    // proses bind (input data ke 2); 
    $nama_barang = "Philips Blender HR 2157";
    $jumlah_barang = 14;
    $harga_barang = 629000;
    // proses execute
    $stmt->execute();
    echo "Terdapat " . $mysqli->affected_rows . " baris yang di tambah<br><br>";
    $stmt->close();

    // proses prepare untuk menampilkan semua isi tabel barang
    $stmt = $mysqli->prepare("SELECT * FROM barang WHERE id_barang");
    // proses execute
    $stmt->execute();

    // proses menampilkan hasil query
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()){
        echo $row["id_barang"]; echo " | ";
        echo $row["nama_barang"]; echo " | ";
        echo $row["jumlah_barang"]; echo " | ";
        echo $row["harga_barang"]; echo " | ";
        echo $row["tanggal_update"];
        echo "<br>";
    }

    // Hapus memory dan tutup prepared statement
    $stmt->free_result();
    $stmt->close();
} catch (Exception $e) {
    echo "Koneksi / Query bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
} finally {
    if (isset($mysqli)){
        $mysqli->close();
    }
}