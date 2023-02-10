<?php 
class Laptop {
    private $merek = "Logitech";
    private $tipe = "Mouse";

    public function __get($name)
    {
        if (($name == "merek") || ($name == "tipe")) {
            $hasil = strtoupper($this->$name);
        } else {
            $hasil = "Maaf property '$name' tidak terdefinisi";
        }
        return $hasil;
    }
}

$produk1 = new Laptop();
echo $produk1->merek . PHP_EOL; // LOGITECH
echo $produk1->tipe . PHP_EOL; // MOUSE
echo $produk1->warna . PHP_EOL; // Maaf Property 'warna' tidak terdefinisi