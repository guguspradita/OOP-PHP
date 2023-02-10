<?php 

class Produk {
    public function __construct(public $jenis, public $merek, public $stok)
    {
        
    }
}

$produk1 = new Produk("Laptop", "Acer", 10);
$produk2 = new Produk("Printer", "Epson", 50);

print_r($produk1);
echo PHP_EOL;
print_r($produk2);