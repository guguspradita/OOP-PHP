<?php 
require "mobil.php";
require "sepedaMotor.php";

$produk1 = new Mobil("Toyota");
echo $produk1->getInfo();
echo PHP_EOL;

$produk2 = new SepedaMotor("Megapro Primus");
echo $produk2->getInfo();
echo PHP_EOL;

?>