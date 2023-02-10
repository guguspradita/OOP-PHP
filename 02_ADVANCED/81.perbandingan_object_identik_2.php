<?php 
class Laptop {
    private $merek;

    public function __construct($merek)
    {
        $this->merek = $merek;
    }
}

$produk1 = new Laptop('Asus');
$produk2 = $produk1;

if ($produk1 === $produk2) {
    echo "Kedua Object sama!".PHP_EOL;
} else {
    echo "Kedua Object tidak sama!".PHP_EOL;
}

/*
operasi perbandingan "identik dengan" (===) hanya akan bernilai true jika kedua variabel berisi referensi ke object yang sama. 
Sedangkan operasi perbandingan "sama dengan" (==) akan bernilai true jika kedua variabel berisi nilai object yang sama atau berisi referensi ke object yang sama.
*/
?>