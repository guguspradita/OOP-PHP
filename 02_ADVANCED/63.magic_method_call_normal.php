<?php 
/*
Magic method __call() adalah method khusus yang dijalankan PHP ketika kita mengakses method yang tidak tersedia (atau tidak bisa di akses) dari sebuah class.
*/
class Barang {

    public function tambah($a,$b,$c) 
    {
        echo "Hasil = ".($a+$b+$c).PHP_EOL;
    }
    public function __call($name, $arguments)
    {
        echo "Maaf method $name dengan argument ". implode(", ", $arguments);
        echo " tidak tersedia".PHP_EOL;
    }
}

$produk1 = new Barang();
$produk1->tambah(4,7,8);
$produk1->setMerek("Xiaomi","Vivo","Oppo");

// Hasil = 19
// Maaf method setMerek dengan argument Xiaomi, Vivo, Oppo tidak tersedia
?>