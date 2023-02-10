<?php 
class Laptop {
    private $merek;

    public function __construct($merek)
    {
        $this->merek = $merek;
    }

    public function __clone()
    {
        echo "Object Laptop di cloning...".PHP_EOL;
    }
}

$produk1 = new Laptop('Asus');
$produk2 = clone $produk1;
$produk3 = clone $produk2;

// Object Laptop di cloning...
// Object Laptop di cloning...
?>