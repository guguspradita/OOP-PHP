<?php 
mysqli_report(MYSQLI_REPORT_STRICT);
    try {
        $mysqli = new mysqli("localhost", "root", "");
        $query = "CREATE DATABASE IF NOT EXISTS ilkom";
        $mysqli->query($query);
        if ($mysqli->error){
            throw new Exception($mysqli->error, $mysqli->errno);
        } else {
            echo "Database 'ilkom' sudah dibuat / sudah tersedia<br>";
        }

        // pilih database "ilkom"
        $mysqli->select_db('ilkom');
        if ($mysqli->error){
            throw new Exception($mysqli->error, $mysqli->errno);
        } else {
            echo "Database 'ilkom' berhasil dipilih. <br>";
        }

        // hapus tabel "barang" jika ada
        $query = "DROP TABLE IF EXISTS barang";
        $mysqli->query($query);
        if ($mysqli->error){
            throw new Exception($mysqli->error, $mysqli->errno);
        }

        // create table "barang"
        $query = "CREATE TABLE barang (
            id_barang INT PRIMARY KEY AUTO_INCREMENT,
            nama_barang VARCHAR(50),
            jumlah_barang INT,
            harga_barang DEC,
            tanggal_update TIMESTAMP
        )";
        $mysqli->query($query);
        if ($mysqli->error){
            throw new Exception($mysqli->error, $mysqli->errno);
        } else {
            echo "Tabel 'barang' berhasil di buat <br>";
        }

        // Isi tabel "barang"
        $sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
        $timestamp = $sekarang->format("Y-m-d H:i:s");

        $query = "INSERT INTO barang
        (nama_barang, jumlah_barang, harga_barang, tanggal_update) VALUES
        ('TV Samsung 43NU7090 4K',5,5399000,'$timestamp'),
        ('Kulkas LG GC-A432HLHU',10,7600000,'$timestamp'),
        ('Laptop ASUS ROG GL503GE',7,16200000,'$timestamp'),
        ('Printer Epson L220',14,2099000,'$timestamp'),
        ('Smartphone Xiaomi Pocophone F1',25,4750000,'$timestamp');
        ";

        $mysqli->query($query);
        if ($mysqli->error){
            throw new Exception($mysqli->error, $mysqli->errno);
        } else {
            echo "Tabel 'barang' berhasil di isi <br>";
        };

    } catch (Exception $e) {
        echo "Koneksi / Query bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
    } finally {
        // tutup koneksi
        if (isset($mysqli)){
            $mysqli->close();
        }
    }