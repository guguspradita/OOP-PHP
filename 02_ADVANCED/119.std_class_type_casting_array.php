<?php 
$produk = ["Merek" => "Oppo", "Tipe" => "Find X", "Harga" => 1339000];
$produk1 = (object) $produk;

echo $produk1->Merek.PHP_EOL."<br>";
echo $produk1->Tipe.PHP_EOL."<br>";
echo $produk1->Harga.PHP_EOL."<br>";

var_dump($produk1 instanceof stdClass);
?>