<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "", "ilkom");
    // Ambil semua data di tabel barang
    $query = "SELECT * FROM barang";
    $result = $mysqli->query($query);

    // mengambil seluruh hasil query SELECT dan menyimpannya sebagai array 2 dimensi.
    $array = $result->fetch_all(MYSQLI_ASSOC); 
} catch (Exception $e){
    echo "Query / Koneksi bermasalah: " . $e->getMessage() . " (" . $e->getMessage() . ")";
} finally {
    if (isset($mysqli)){
        $mysqli->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Tabel MySQL</title>
</head>
<body>
    <table border="1" solid black>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Update</th>
        </tr>
        <?php foreach ($array as $data) { ?>
        <tr>
            <td><?php echo $data["id_barang"]; ?></td>
            <td><?php echo $data["nama_barang"]; ?></td>
            <td><?php echo $data["jumlah_barang"]; ?></td>
            <td><?php echo $data["harga_barang"]; ?></td>
            <td><?php echo $data["tanggal_update"]; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>