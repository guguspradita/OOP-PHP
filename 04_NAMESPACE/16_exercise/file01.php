<?php 
include("file02.php");
include("file03.php");

$laptop = new Elektronik\Komputer\Produk("Lenovo");
echo $laptop->getInfo();
echo PHP_EOL;

$televisi = new Elektronik\Televisi("Sony", 5000000);
echo $televisi->getInfo();
echo PHP_EOL;
