<?php 
/*
Magic method __callStatic() adalah method khusus yang dijalankan PHP ketika kita mengakses method static yang tidak tersedia (atau tidak bisa di akses) dari sebuah class.
*/

class Barang {
    public static function __callStatic($name, $arguments)
    {
        echo "Maaf method $name dengan argument ". implode(", ",$arguments);
        echo " tidak tersedia".PHP_EOL;
    }
}

Barang::tambah(3, 7, 8);

// Maaf method tambah dengan argument 3, 7, 8 tidak tersedia
?>