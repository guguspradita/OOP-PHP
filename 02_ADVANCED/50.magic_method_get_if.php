<?php 
// Method __get() adalah magic method yang dijalankan ketika kita mengakses property yang
// tidak ada (atau tidak bisa diakses) dari luar class.

class Laptop {
    public function __get($name) // mengatasi property yang tidak ada
    {
        if ($name == "merek") {
            $hasil = "Logitech";
        } else if ($name == "harga"){
            $hasil = 150000;
        } else if ($name == "tipe") {
            $hasil = "Mouse";
        } else {
            $hasil = "Maaf Property '$name' tidak terdefinisi";
        }
        return $hasil;
    }
}
// Kesimpulannya, jika kita mengakses property yang tidak tersedia atau tidak bisa diakses, 
// PHP akan mencari magic method __get()

$produk1 = new Laptop();
echo $produk1->merek . PHP_EOL; // Logitech
echo $produk1->harga . PHP_EOL; // 150000
echo $produk1->tipe . PHP_EOL; // Mouse
echo $produk1->warna . PHP_EOL; // Maaf Property 'warna' tidak terdefinisi