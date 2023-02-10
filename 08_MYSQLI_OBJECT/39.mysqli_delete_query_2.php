<?php 

$mysqli = new mysqli("localhost", "root", "", "ilkom");

// delete data di tabel barang dengan id_barang = 4 sama id_barang 5
$query = "DELETE FROM barang WHERE id_barang = 4 OR id_barang = 5";
$mysqli->query($query);
echo "Terdapat " . $mysqli->affected_rows . " baris yang telah dihapus";