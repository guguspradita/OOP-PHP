<?php 
// Method __get() adalah magic method yang dijalankan ketika kita mengakses property yang
// tidak ada (atau tidak bisa diakses) dari luar class.

class Laptop {
    private $merek = "Logitech";
    private $harga = 150000;
    private $tipe = "Mouse";

    public function __get($name) // mengatasi property yang tidak ada
    {
        if ($name == "merek") {
            $hasil = strtoupper($this->merek);
        } else if ($name == "harga"){
            $hasil = number_format($this->harga, 2, ",", ".");
        } else if ($name == "tipe") {
            $hasil = "Tipe Produk: " . $this->tipe;
        } else {
            $hasil = "Maaf Property '$name' tidak terdefinisi";
        }
        return $hasil;
    }
}
// Kesimpulannya, jika kita mengakses property yang tidak tersedia atau tidak bisa diakses, 
// PHP akan mencari magic method __get()

$produk1 = new Laptop();
echo $produk1->merek . PHP_EOL; // LOGITECH
echo $produk1->harga . PHP_EOL; // 150. 000,00
echo $produk1->tipe . PHP_EOL; // Tipe Produk: Mouse
echo $produk1->warna . PHP_EOL; // Maaf Property 'warna' tidak terdefinisi