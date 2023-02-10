<?php 
class Produk {
    public $merek = "Sony";
}

class Televisi extends Produk {
    public $merek = "Panasonic";
    // public $merekProduk = parent::merek; // Error: Undefined constant parent::merek
}

$produk1 = new Televisi();
echo $produk1->merekProduk; 

?>