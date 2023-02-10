<?php 
class Produk {
    public $jenis;
    public $merek;
    public $stok;

    public function __construct($jenis, $merek, $stok = 10)
    {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
    }
}

$produk1 = new Produk("Laptop", "MSI", 70);
$produk2 = new Produk("Hp", "Samsung");

print_r($produk1);
echo "<br>";
print_r($produk2);
?>