<?php 
// Fungsi is_object() dipakai untuk memeriksa apakah sebuah variabel berisi object atau tidak.

class Produk {}

$produk1 = new Produk();
$produk2 = [1,2,3];

var_dump(is_object($produk1));
echo "<br>";
echo PHP_EOL;
var_dump(is_object($produk2));

// Fungsi is_object() mengembalikan nilai true jika variabel yang diperiksa berisi object, nilai false jika variabel tersebut bukan berisi object.
?>