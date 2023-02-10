<?php 
include ("file02.php");

$Produkmiyako = new Miyako\Produk(); // membuat objek dari produk namespace miyako
echo $Produkmiyako->merek; // Miyako
echo PHP_EOL;
echo Miyako\hidupkan();
echo PHP_EOL;
echo Miyako\JENIS;
echo PHP_EOL;
echo $harga;
echo PHP_EOL;

?>