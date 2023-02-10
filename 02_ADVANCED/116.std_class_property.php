<?php 
$produk1 = new stdClass();
$produk1->merek = "Oppo";
$produk1->tipe = "Find X";
$produk1->harga = 1339000;

echo $produk1->merek."<br>";
echo $produk1->tipe."<br>";
echo $produk1->harga."<br>";
echo "<br>";
var_dump($produk1);
?>