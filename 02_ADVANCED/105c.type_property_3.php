<?php
declare(strict_types=1); // ini dipakai agar PHP masukke strict mode. Jika ditulis seperti ini, barulah scalar type hinting menampilkan pesan error.

// Semua tipe data dasar bisa diterapkan ke dalam typed properties seperti int, float, boolean, dll
class Smartphonekuu {
    public string $merek;   // Typed Properties -> membatasi tipe data property
}

$produk01 = new Smartphonekuu();
$produk01->merek = 100; // jika declare(strict_types=1) tidak tulis, maka akan dikonversi otomatis
var_dump($produk01->merek); // Fatal error:  Uncaught TypeError: Cannot assign int to property Smartphonekuu::$merek of type string