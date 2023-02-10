<?php 
require_once "53.setter_getter_constructor.php";

class laptop extends Produk {

}

$produk2 = new Laptop(0, "5");
echo "Stok Produk " . $produk2->getMerek() . " : " . $produk2->getStok();

?>