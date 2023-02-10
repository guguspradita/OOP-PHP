<?php
namespace Elektronik\Miyako; 

class Produk {
    public $merek = "Miyako";
}

$miyako = new Produk();
echo $miyako->merek;   // Miyako
echo PHP_EOL;

namespace Elektronik\Maspion;

class Produk {
    public $merek = "Maspion";
}
$maspion = new Produk();
echo $maspion->merek;   // Maspion
echo PHP_EOL;

?>