<?php 
include("file02.php");
include("file03.php");

use Elektronik\Komputer\Produk;
use Elektronik\Televisi;

$laptop = new Produk("Lenovo");
echo $laptop->getInfo();
echo PHP_EOL;

$televisi = new Televisi("Sony", 5000000);
echo $televisi->getInfo();
echo PHP_EOL;
