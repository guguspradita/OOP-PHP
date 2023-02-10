<?php 
// Menggunakan tanda kurung kurawal memiliki kelebihan yakni kita bisa beralih ke global namespace.
namespace Elektronik\Maspion {
    class Produk {
        public $merek = "Maspion";
    }
    $maspion = new Produk();
    echo $maspion->merek;   // Maspion
    echo PHP_EOL;
}

namespace {
    class Produk {
        public $merek = "Cosmos";
    }
    $cosmos = new Produk();
    echo $cosmos->merek;  // Cosmos
    echo PHP_EOL;
}

// di baris 12 – 19 berada di global namespace, atau bisa
// disebut berada di area yang "tidak menggunakan namespace".
?>