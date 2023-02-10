<?php 
// Namespace adalah fitur PHP untuk membuat semacam "folder virtual".

// namespace miyabi;
// namespace mariaozawa;

// namespace miyabi;
include ('file02.php');
include ('file03.php');

// $produk1 = new Produkanya();
$produk1 = new miyabi\Produkanya(); // penulisan namespace bisa seperti ini

$produk2 = new mariaozawa\Produkanya();

echo $produk1->merek;    // miyabi
echo PHP_EOL;

echo $produk2->merek;    // miyabi
echo PHP_EOL;

