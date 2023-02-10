<?php 
class Produk {
    public $jenis;
    public $merek;
    public $stok;
}

$produk1 = new Produk();
$produk1->jenis = "laptop";
$produk1->merek = "MSI";
$produk1->stok = 100;

$produk2 = new Produk();
$produk2->jenis = "Hp";
$produk2->merek = "Samsung";
$produk2->stok = 50;

print_r($produk1);
echo "<br>";
print_r($produk2);
?>