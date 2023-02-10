<?php 
class Produk {
    // Sebuah method yang di set sebagai final, tidak bisa di override oleh method lain di child class. 
    final public function hello(){
        return "Ini dari Produk <br>";
    }
}

$produk1 = new Produk();
echo $produk1->hello(); // Ini dari Produk
?>