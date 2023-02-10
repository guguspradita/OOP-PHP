<?php 
class Produk {
    public $merek;
    public $stok;
}

$produk1 = new Produk();
$produk1->merek ="Samsung";
$produk1->stok = 100;

echo $produk1->merek; // acer
echo "<br>";
echo $produk1->stok; // 100

?>