<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "", "ilkom");
    // Ambil semua data di tabel barang
    $query = "SELECT * FROM barang";
    $result = $mysqli->query($query);

    // mengambil seluruh hasil query SELECT dan menyimpannya sebagai array 2 dimensi.
    $i=0;
    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
        $arr[$i]["id_barang"] = $row["id_barang"]; 
        $arr[$i]["nama_barang"] = $row["nama_barang"];
        $arr[$i]["jumlah_barang"] = $row["jumlah_barang"];
        $arr[$i]["harga_barang"] = number_format($row["harga_barang"], 2, ",", ".");
        // $arr[$i]["tanggal_barang"] = $row["tanggal_update"];
        $tanggal = new DateTime($row["tanggal_update"]);
        $arr[$i]["tanggal_update"] = $tanggal->format('d-m-Y H:i'); 
        $i++;
    }
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
    <style>
        table {
        border-collapse: collapse;
        margin: 0 auto;
        }
        td, th {
        border-bottom: 1px solid black;
        }
        th,td {
        padding: 10px 15px;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Update</th>
        </tr>
        <?php foreach ($arr as $data) { ?>
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