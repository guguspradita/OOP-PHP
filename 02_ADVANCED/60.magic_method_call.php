<?php 
/*
Magic method __call() adalah method khusus yang dijalankan PHP ketika kita mengakses method yang tidak tersedia (atau tidak bisa di akses) dari sebuah class.
*/
class Barang {
    public function __call($name, $arguments)
    {
        echo "Maaf method $name tidak tersedia".PHP_EOL;
    }
}

$produk1 = new Barang();
$produk1->tambah(3,6,8); // Maaf method tambah tidak tersedia
?>