<?php 

class Produk{}
interface LaptopGaming{}
class Laptop extends Produk implements LaptopGaming {
    public function cekHarga()
    {
        return "Ini dari interface Laptop Gaming";
    }
}

$produk1 = new Laptop();
var_dump(is_a($produk1, "Laptop"));
var_dump(is_a($produk1, "Produk"));
var_dump(is_a($produk1, "LaptopGaming"));
var_dump(is_a($produk1, "Tidak ada"));
?>