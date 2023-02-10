<?php 
include('file02.php');
include('file03.php');

use Produk\KipasAngin\MiyakoProduk;
use Produk\KipasAngin\MaspionProduk;

$miyako = new MiyakoProduk(); // membuat objek dari class Miyako
$maspion = new MaspionProduk(); // membuat objek dari class Maspion

echo $miyako->merek; // miyako
echo PHP_EOL;
echo $maspion->merek; // Maspion
echo PHP_EOL;

/*
    misal kita ingin mengakses namespace seperti ini,
    use Produk\Elektronik\Televisi;
    use Produk\Elektronik\MesinCuci;
    use Produk\Elektronik\Laptop;
    use Produk\Elektronik\Komputer as PC;

    Bisa ditulis ulang menjadi:
    use Produk\Elektronik\{Televisi, MesinCuci, Laptop, Komputer as PC};
 */
?>