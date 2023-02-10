<?php  
try {
    // koneksi ke database
    $pdo = new PDO("mysql:host=localhost;", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // create database ilkom
    $query = "CREATE DATABASE IF NOT EXISTS ilkoom";
    $stmt = $pdo->query($query);
    if ($stmt !== FALSE) { // mengembalikan (affected rows).
        echo "DATABASE ilkoom berhasil dibuat / sudah tersedia <br>";
    }

    // pilih database ilkom
    $query = "USE ilkoom";
    $stmt = $pdo->query($query);
    if ($stmt !== FALSE) { // mengembalikan (affected rows).
        echo "DATABASE ilkoom berhasil dipilih.. <br>";
    }

    // Hapus tabel mahasiswa jika ada
    $query = "DROP TABLE IF EXISTS mahasiswa";
    $stmt = $pdo->query($query);

    // Buat tabel mahasiswa
    $query = "CREATE TABLE mahasiswa (
        nim CHAR(8) PRIMARY KEY,
        nama VARCHAR(100),
        tempat_lahir VARCHAR(50),
        tanggal_lahir DATE,
        fakultas VARCHAR(50),
        jurusan VARCHAR(50),
        ipk DECIMAL(3,2))";

    $stmt = $pdo->query($query);
    if ($stmt !== FALSE) { // mengembalikan (affected rows).
        echo "TABEL 'mahasiswa' berhasil dibuat.. <br>";
    }

    // Isi tabel "mahasiswa"
    $query = "INSERT INTO mahasiswa VALUES
    ('14005011', 'Riana Putria', 'Padang', '1996-11-23', 'FMIPA', 'Kimia', 3.1),
    ('15021044', 'Rudi Permana', 'Bandung', '1994-08-22', 'FASILKOM', 'Ilmu Komputer', 2.9),
    ('15003036', 'Sari Citra Lestari', 'Jakarta', '1997-12-31', 'Ekonomi', 'Manajemen', 3.5),
    ('15002032', 'Rina Kumala Sari', 'Jakarta', '1997-06-28', 'Ekonomi', 'Akuntansi', 3.4),
    ('13012012', 'James Situmorang', 'Medan', '1995-04-02', 'Kedokteran','Kedokteran Gigi', 2.7)";
    $stmt = $pdo->query($query);
    if ($stmt !== FALSE){
        echo "Tabel 'mahasiswa' berhasil di isi ".$stmt->rowCount()."
        baris data <br>";
    }

    echo "<hr>";

    echo "<h2>TABEL MAHASISWA</h2>";

    $query = "SELECT * FROM mahasiswa";
    $stmt = $pdo->query($query);

    // tampilkan tabel mahasiswa
    while ($arr = $stmt->fetch(PDO::FETCH_NUM)){
        echo $arr[0] . " | " . $arr[1] . " | " . $arr[2] . " | " . $arr[3] . " | " . $arr[4];
        echo "<br>";
    }

} catch (Exception $e){
    "Query / Koneksi bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")";
}