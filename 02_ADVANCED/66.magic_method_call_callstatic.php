<?php 
/*
Magic method __callStatic() adalah method khusus yang dijalankan PHP ketika kita mengakses method static yang tidak tersedia (atau tidak bisa di akses) dari sebuah class.
*/

class Barang {
    public function __call($name, $arguments)
    {
        echo "Maaf method $name dengan argument ". implode(", ",$arguments);
        echo " tidak tersedia".PHP_EOL;
    }
    public static function __callStatic($name, $arguments)
    {
        echo "Maaf method $name dengan argument ". implode(", ",$arguments);
        echo " tidak tersedia".PHP_EOL;
    }
}

$produk1 = new Barang();
$produk1->tambah(1,2,3);
// Maaf method tambah dengan argument 1, 2, 3 tidak tersedia

Barang::tambah(3, 7, 8);
// Maaf method tambah dengan argument 3, 7, 8 tidak tersedia
?>