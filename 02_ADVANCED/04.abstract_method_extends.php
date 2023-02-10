<?php 

abstract class Produk {
    abstract public function cekHarga();
}

// class Televisi extends Produk {
    // Fatal error: Class Televisi contains 1 abstract method and must therefore be
    // declared abstract or implement the remaining methods (Produk::cekHarga)
// }

// $produk1 = new Televisi();