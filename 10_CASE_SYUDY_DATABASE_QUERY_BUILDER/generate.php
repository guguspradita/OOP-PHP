<?php 
require "DB.php";

// koneksi kedatabase
$DB = DB::getInstance();

// buat database "ilkom"
$query = "CREATE DATABASE IF NOT EXISTS ilkom";
$result = $DB->runQuery($query);
if ($result === TRUE) {
    echo "Database 'ilkom' sudah dibuat / sudah tersedia<br>";
}

// pilih database "ilkom"
$query = "USE ilkom";
$result = $DB->runQuery($query);
if ($result === TRUE) {
    echo "Database 'ilkom' sudah dipilih ..<br>";
}

// hapus tabel "barang" jika ada
$query = "DROP TABLE IF EXISTS user";
$result = $DB->runQuery($query);


// create table "User"
$query = "CREATE TABLE user (
    username VARCHAR(50) PRIMARY KEY,
    password VARCHAR(255),
    email VARCHAR(100),
    tanggal_update TIMESTAMP
)";
$result = $DB->runQuery($query);

if ($result === TRUE){
    echo "Tabel 'barang' berhasil di buat <br>";
} 

// Isi tabel "barang"
$sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$timestamp = $sekarang->format("Y-m-d H:i:s");

// menambah data kedatabase dengan class DB
$result = $DB->insert('user', [
    "username" => "alex",
    "password" => "alex123",
    "email" => "alexsaja@yahoo.com"
]);
$result = $DB->insert('user', [
    "username" => "rina",
    "password" => "123456",
    "email" => "rinapunya@gmail.com"
]);
if ($result) {
    echo "Tabel 'User' berhasi di isi " . $DB->count() . " Baris Data <br>";
}

// menampilkan tabel user dengan method get
$result = $DB->get('user');
echo "<pre>";
print_r($result);
echo "</pre>";

// method select() dan get() menampilkan username dan password
$result = $DB->select('username, password');
$tabelUser = $DB->get('user');

foreach ($tabelUser as $user) {
    echo "$user->username | $user->password <br><br>";
  }

// method update(), tukar alamat email dari username alex menjadi alex999@gmail.com.
$result = $DB->update('user', ['email' =>'alex999@gmail.com'], ['username', '=', 'alex']);
if ($result) {
    echo "Terdapat " . $DB->count() . " Data yang diupdate <br>";
}

// method getWhereOnce() dari class DB, tampilkan username dan email dari username alex.

$tabelUser = $DB->getWhereOnce('user', ['username', '=', 'alex']);
echo "$user->username | $user->password <br>";

echo "<hr>";

// ======================================================
// 06. hapus user alex
$result = $DB->delete('user',['username','=','alex']);

if($result) {
  echo "Terdapat ".$DB->count()." data yang dihapus";
}