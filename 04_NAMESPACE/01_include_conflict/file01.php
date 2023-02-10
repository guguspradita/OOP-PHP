<?php 
// Namespace adalah fitur PHP untuk membuat semacam "folder virtual".

// namespace miyabi;
include ('file02.php');

// $produk = new Produkanya(); seperti ini juga bisa atau
$produk = new miyabi\Produkanya();
echo $produk->merek;    // miyabi
echo PHP_EOL;

