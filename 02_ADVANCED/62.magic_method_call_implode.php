<?php 
/*
Magic method __call() adalah method khusus yang dijalankan PHP ketika kita mengakses method yang tidak tersedia (atau tidak bisa di akses) dari sebuah class.
*/
class barang {
    public function __call($name, $arguments)
    {
        echo "Maaf method $name dengan argument ". implode(", ", $arguments);
        echo " tidak tersedia".PHP_EOL;
    }
}

$produk1 = new Barang();
$produk1->tambah(4,7,8);
$produk1->setMerek("Xiaomi","Vivo","Oppo");

// Maaf method tambah dengan argument 4, 7, 8 tidak tersedia
// Maaf method setMerek dengan argument Xiaomi, Vivo, Oppo tidak tersedia
?>