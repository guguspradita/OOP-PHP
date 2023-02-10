<?php 
// Jika sebuah property atau method di set sebagai public, 
// maka seluruh kode program di dalam dan luar class bisa mengaksesnya.
class Produk {
    public $merek;

    public function sayHello(){
        return "Halo Ini dari Class Produk <br>";
    }
}

$produk1 = new Produk();
echo $produk1->merek = "Samsung";   // Samsung
echo "<br>";
echo $produk1->sayHello();  // Halo Ini dari Class Produk
?>