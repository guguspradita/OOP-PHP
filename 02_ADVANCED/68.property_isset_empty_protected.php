<?php 
/*
Magic method __isset() akan dijalankan ketika sebuah property yang tidak ada (atau tidak bisa diakses) di periksa dengan fungsi isset() atau empty().

Fungsi isset() dipakai untuk memeriksa apakah sebuah variabel terdefinisi dan berisi sesuatu. 

Sedangkan fungsi empty() dipakai untuk memeriksa apakah sebuah variabel memiliki nilai yang dianggap kosong seperti 0, "" (string kosong), [ ] (array kosong), atau variabel tersebut diisi nilai NULL.
*/

class barang {
    protected $merek = "Sony";
    protected $stok;
    protected $tipe = "";
}

$produk1 = new Barang();
var_dump(isset($produk1->merek)); // bool(false)
echo PHP_EOL;
var_dump(isset($produk1->stok)); // bool(false)
echo PHP_EOL;
var_dump(isset($produk1->tipe)); // // bool(false)
echo PHP_EOL;

var_dump(empty($produk1->merek)); // bool(true)
echo PHP_EOL;
var_dump(empty($produk1->stok)); // bool(true)
echo PHP_EOL;
var_dump(empty($produk1->tipe)); // bool(true)
echo PHP_EOL;
?>