<?php 
// type hinting untuk tipe data scalar, yakni type hinting untuk tipe data dasar: integer, float, boolean dan string. 
// Dengan menerapkan type hinting, kita bisa membatasi tipe data yang bisa diterima oleh sebuah function.

function tambah ($a, $b){
    return $a + $b;
}

echo tambah(5,6); // 11
echo "<br>";
echo tambah(10.3,5); // 15.3
echo "<br>";
echo tambah("5", 12); // 17

?>