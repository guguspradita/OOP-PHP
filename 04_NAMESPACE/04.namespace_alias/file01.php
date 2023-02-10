<?php 
// namespace import atau alias dipakai untuk menyingkat penulisan sebuah kelas

include ('file02.php');
include ('file03.php');

// keyword use dipakai untuk mengimport namespace, yang diikuti keyword as untuk membuat alias.
use Laptop\Asus\Laptopanya as MiyabiProduk;
use Laptop\Gaming\ROG\Laptopanya as GamingProduk;

$produk = new MiyabiProduk();
echo $produk->merek; // asus
echo PHP_EOL;

$produkGaming = new GamingProduk();
echo $produkGaming->merek; // ASUS ROG
echo PHP_EOL;
?>