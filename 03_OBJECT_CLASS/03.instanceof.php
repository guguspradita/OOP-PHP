<?php 
class Produk {}
interface LaptopGaming{}
class Laptop extends Produk implements LaptopGaming {
    public function cekHarga()
    {
        return "Ini dari interface Laptop Gaming";
    }
}

$produke = new Laptop();

// Fungsi is_a() ini sebenarnya adalah penulisan lain dari perintah instanceof.
var_dump($produke instanceof Produk);
echo "<br>";
var_dump($produke instanceof Laptop);
echo "<br>";
var_dump($produke instanceof LaptopGaming);
echo "<br>";
var_dump($produke instanceof Televisi);
echo "<br>";

?>