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

if ($produk1 == $produk2){
    echo "Kedua object sama".PHP_EOL;
} else {
    echo "Kedua object tida sama".PHP_EOL;
}

// Kedua object sama
?>