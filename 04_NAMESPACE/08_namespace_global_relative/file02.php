<?php 
namespace miyako;

class Produk {
    public $merek = "Miyako";
}

$produk1 = new Produk();
echo $produk1->merek; // Miyako
echo PHP_EOL;

// $produk2 = new stdClass(); // Fatal error: Uncaught Error: Class 'Miyako\stdClass' not found
// cara mengakses global space tambahkan backslah "\"
$produk2 = new \stdClass();use stdClass;

?>