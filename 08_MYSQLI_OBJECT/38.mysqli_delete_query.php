<?php 

$mysqli = new mysqli("localhost", "root", "", "ilkom");

// delete data di tabel barang dengan id_barang = 1
$query = "DELETE FROM barang WHERE id_barang = 1";
$mysqli->query($query);
echo "Terdapat " . $mysqli->affected_rows . " baris yang telah dihapus";