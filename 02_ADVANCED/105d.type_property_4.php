<?php
declare(strict_types=1);    // ini dipakai agar PHP masukke strict mode. Jika ditulis seperti ini, barulah scalar type hinting menampilkan pesan error.

// Semua tipe data dasar bisa diterapkan ke dalam typed properties seperti int, float, boolean, dll
class Smartphonekuu {
    public int $jumlah;   // Typed Properties -> membatasi tipe data property
}

$produk01 = new Smartphonekuu();
$produk01->jumlah = "100";
var_dump($produk01->jumlah); // Fatal error:  Uncaught TypeError: Cannot assign string to property Smartphonekuu::$jumlah of type int