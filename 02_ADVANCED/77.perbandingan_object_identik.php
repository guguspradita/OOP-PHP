<?php 
class Laptop {
    private $merek;
    public function __construct($merek)
    {
        $this->merek = $merek;
    }
}

$produk1 = new Laptop('Asus');
$produk2 = new Laptop('Asus');

if ($produk1 === $produk2){
    echo "Kedua object sama!".PHP_EOL;
} else {
    echo "Kedua object tidak sama!".PHP_EOL;
}

// Kedua object tidak sama!

// Operasi perbandingan "identik dengan" ( === ) hanya akan bernilai true jika kedua object merujuk ke object yang sama, bukan hanya berisi nilai yang sama.
?>