<?php 
namespace miyako;

include('file03.php');

class Produk {
    public $merek = "Miyako";
}

// mengakses namespace miyako
$produk1 = new Produk();
echo $produk1->merek; // Miyako
echo PHP_EOL;

// mengakses global space
$maspion = new \Produk();
echo $maspion->merek;
echo PHP_EOL;

?>