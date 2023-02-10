<?php 
// Method __get() adalah magic method yang dijalankan ketika kita mengakses property yang
// tidak ada (atau tidak bisa diakses) dari luar class.

class Laptop {
    public function __get($name) // mengatasi property yang tidak ada
    {
        return "Maaf Property '$name' tidak terdefinisi";
    }
}
// Kesimpulannya, jika kita mengakses property yang tidak tersedia atau tidak bisa diakses, 
// PHP akan mencari magic method __get()

$produk1 = new Laptop();
echo $produk1->merek . PHP_EOL; // Maaf Property 'merek' tidak terdefinisi
echo $produk1->harga . PHP_EOL; // Maaf Property 'harga' tidak terdefinisi
echo $produk1->tipe . PHP_EOL; // Maaf Property 'tipe' tidak terdefinisi