<?php 
class Produk {
    public $merek = "Sony";
}

class Televisi extends Produk {
    public $merek = "Panasonic";
}

$produk1 = new Televisi();
echo $produk1->merek;   // Panasonic

?>