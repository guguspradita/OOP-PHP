<?php 
class Produk {}
interface LaptopGaming{}
class Laptop extends Produk implements LaptopGaming {
    public function cekHarga()
    {
        return "Ini dari interface Laptop Gaming";
    }
}

$produknya = new Laptop();
// Fungsi is_subclass_of() akan mengembalikan nilai false jika variabel yang diperiksa merupakan class saat ini.
var_dump(is_subclass_of($produknya, 'Laptop'));
echo "<br>";
var_dump(is_subclass_of($produknya, 'Produk'));
echo "<br>";
var_dump(is_subclass_of($produknya, 'LaptopGaming'));
echo "<br>";
var_dump(is_subclass_of($produknya, 'Televisi'));
echo "<br>";
?>