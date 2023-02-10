<?php 
// multiple Namespace
namespace Elektronik\Maspion {
    class Produk {
        public $merek = "Maspion";
    }
    $produkMaspion = new Produk();
    echo $produkMaspion->merek; // Maspion
    echo PHP_EOL;
}

namespace Elektronik\Miyako {
    class Produk {
        public $merek = "Miyako";
    }
    $produkMiyako = new Produk();
    echo $produkMiyako->merek;  // Miyako
    echo PHP_EOL;
}
?>