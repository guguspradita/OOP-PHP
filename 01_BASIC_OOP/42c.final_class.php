<?php 

// Sedangkan class yang di set sebagai final, tidak bisa lagi diturunkan kepada class lain.
final class Produk {
    // Sebuah method yang di set sebagai final, tidak bisa di override oleh method lain di child class. 
    final public function hello(){
        return "Ini dari Produk <br>";
    }
}

// class Televisi extends Produk {
//     // Fatal error: Class Televisi may not inherit from final class (Produk)
// }

$produk1 = new Produk();
echo $produk1->hello();
?>