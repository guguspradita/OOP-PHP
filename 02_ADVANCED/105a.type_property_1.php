<?php
// declare(strict_types=1);

class Smartphonekuu {
    public string $merek;   // Typed Properties -> membatasi tipe data property
}

$produk01 = new Smartphonekuu();
// $produk01->merek = 2; // 2      // harus masuk strict mode jika ingin menampilkan error
echo $produk01->merek = "Oppo"; // Oppo