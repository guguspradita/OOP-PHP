<?php 
class Produk {
    public $jenis;
    public $merek;
    public $stok;

    public function __construct($a, $b, $c)
    {
        $this->jenis = $a;
        $this->merek = $b;
        $this->stok = $c;
    }
}

$produk1 = new Produk("Laptop", "MSI", 70);
$produk2 = new Produk("Hp", "Samsung", 30);

print_r($produk1);
echo "<br>";
print_r($produk2);
?>