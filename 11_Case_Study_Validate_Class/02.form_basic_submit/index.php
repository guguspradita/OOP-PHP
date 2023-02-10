<?php 
    if (!empty($_POST)){
        if(isset($_POST['nama_barang'])){
            echo $_POST['nama_barang']. "<br>";
        }
        if(isset($_POST['jumlah_barang'])){
            echo $_POST['jumlah_barang']. "<br>";
        }
        if(isset($_POST['harga_barang'])){
            echo $_POST['harga_barang']. "<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Class</title>
    <style>
        .container {
            margin: 20px auto;
            width: 500px;
        }
        form > div {
            margin: 15px 0;;
        }
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Barang</h2>
        <div class="pesan-error">
            <div>
                <form action="" method="post">
                    <div>
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang">
                    </div>
                    <div>
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="text" name="jumlah_barang">
                    </div>
                    <div>
                        <label for="harga_barang">Harga Barang</label>
                        <input type="text" name="harga_barang">
                    </div>
                    <div>
                        <input type="submit" value="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>