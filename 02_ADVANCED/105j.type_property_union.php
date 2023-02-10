<?php 
// Union Typed Properties
// PHP 8 mengembangkan fitur typed properties ini lebih jauh lagi, dimana kita bisa buat beberapa tipe data untuk sebuah property (tidak hanya satu).

declare(strict_types=1);    // ini dipakai agar PHP masukke strict mode. Jika ditulis seperti ini, barulah scalar type hinting menampilkan pesan error.

class Smartphonne {
    public int|float $jumlah;
}

$produk1 = new Smartphonne();
$produk1->jumlah = 100;
var_dump($produk1); // int(100)

$produk1->jumlah = 50.4;
var_dump($produk1); // float(50.4)

$produk1->jumlah = "20";  // Fatal error:  Uncaught TypeError: Cannot assign string to property Smartphonne::$jumlah of type int|float
var_dump($produk1);


?>