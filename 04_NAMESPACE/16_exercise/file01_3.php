<?php 
// Cara ketiga, adalah menggunakan multiple namespace:

namespace Elektronik\Komputer{
    include("file02.php");

    $produk1 = new Produk("Lenovo");
    echo $produk1->getInfo();
    echo PHP_EOL;
}

namespace Elektronik {
    include("file03.php");
    $produk2 = new Televisi("Sony", 5000000);
    echo $produk2->getInfo();
    echo PHP_EOL;
}
