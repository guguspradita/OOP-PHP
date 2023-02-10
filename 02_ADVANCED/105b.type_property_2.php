<?php
// declare(strict_types=1); // ini dipakai agar PHP masukke strict mode. Jika ditulis seperti ini, barulah scalar type hinting menampilkan pesan error.

class Smartphonekuu {
    public string $merek;   // Typed Properties -> membatasi tipe data property
}

$produk01 = new Smartphonekuu();
$produk01->merek = 100;
var_dump($produk01->merek); // string(3) "100"