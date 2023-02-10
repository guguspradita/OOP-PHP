<?php 
// keyword final yang bisa dipakai untuk "memutus" overriding dan penurunan.
// Sebuah method yang di set sebagai final, tidak bisa di override oleh method lain di child class. 
// Sedangkan class yang di set sebagai final, tidak bisa lagi diturunkan kepada class lain.

class Produk {
    public final function hello(){
        return "Ini dari Produk <br>";
    }
}

class Televisi extends Produk {
    // public function hello(){    // // Fatal error: Cannot override final method Produk::hello()
    //     return "Ini dari Televisi <br>";
    // }
}
?>