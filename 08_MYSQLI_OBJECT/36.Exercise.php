<?php 
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli("localhost", "root", "", "ilkom");
    // Ambil semua data di tabel barang
    $query = "SELECT * FROM barang";
    $result = $mysqli->query($query);

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
        <?php while ($array= $result->fetch_assoc()) { ?>
        <?php $i=0 ?>
        <tr>
            <td><?php echo $arr[$i] =  $array["id_barang"]; ?></td>
            <td><?php echo $arr[$i] = $array["nama_barang"]; ?></td>
            <td><?php echo $arr[$i] = $array["jumlah_barang"]; ?></td>
            <td><?php echo $arr[$i] = number_format($array["harga_barang"], 2, ",", ".") ?></td>
            <td><?php $arr[$i] = $tanggal = new DateTime($array["tanggal_update"]); echo $tanggal->format('d-m-Y H:i'); ?></td>
        </tr>
        <?php $i++; ?>
        <?php } ?>
    </table>
</body>
</html>