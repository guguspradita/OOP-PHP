<?php 
// Anonymous class adalah class "tanpa nama" (anonym), yang digunakan untuk membuat class "sekali pakai". Class anonym ini hanya bisa di instansiasi 1 kali saja, tidak bisa lebih.

// Untuk membuat anonymous class, kita memakai perintah new class(){}

$produk1 = new class(){};

var_dump($produk1); // .anonymous_class_basic.php object(class@anonymous)#1 (0) {}

?>