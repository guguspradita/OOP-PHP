<?php 
class Produk {
    public $jenis = "";
    public $merek = "";

// $this adalah sebuah variabel khusus yang merujuk kepada object
    public function pesanProduk(){
        return $this->jenis. " " . $this->merek . " dipesan...";
    }
}

$produk1 = new Produk(); // Instansiasi object
$produk1->jenis = "Laptop";
$produk1->merek = "MSI";

$produk2 = new Produk(); // Instansiasi Object
$produk2->jenis="Televisi";
$produk2->merek="Samsung";

echo $produk1->pesanProduk(); // Laptop dipesan...
echo "<br>";
echo $produk2->pesanProduk(); // Laptop dipesan...
?>