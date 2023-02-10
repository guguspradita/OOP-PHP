<?php 
/*
Magic method __unset() bisa jadi solusi jika kita ingin menampilkan pesan kesalahan ketika sebuah property yang tidak ada dihapus menggunakan perintah unset().
*/

class Barang {
    public $merek = "Sony";

    public function __unset($name)
    {
        echo "Maaf, property $name tidak ada / tidak bisa diakses".PHP_EOL;
    }
}

$produk1 = new Barang();
unset($produk1->stok); // Maaf, property stok tidak ada / tidak bisa diakses
?>