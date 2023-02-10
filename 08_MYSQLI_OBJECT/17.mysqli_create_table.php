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
    } catch (Exception $e) {
        echo "Koneksi / Query bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
    } finally {
        // tutup koneksi
        if (isset($mysqli)){
            $mysqli->close();
        }
    }