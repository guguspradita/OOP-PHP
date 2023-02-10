<?php 
// PHP memiliki prototype class atau class standard yang bernama stdClass. Ini adalah class bawaan PHP yang jika dipakai langsung, tidak berisi apapun (class kosong). Namun jika terdapat kode program yang dikonversi menjadi object, object tersebut akan berada di bawah class stdClass.

$produk1 = new stdClass();
var_dump($produk1);

// Tidak berbeda seperti pembuatan object biasa. Dan object hasil dari stdClass ini juga berfungsi sebagaimana object biasa, misalnya kita bisa ditambah dengan property:
?>