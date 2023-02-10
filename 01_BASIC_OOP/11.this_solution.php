<?php 
class Produk {
    public $jenis = "";
    public $merek = "";

// $this adalah sebuah variabel khusus yang merujuk kepada object
    public function pesanProduk(){
        return $this->jenis. " dipesan...";
    }
}

$produk1 = new Produk(); // Instansiasi object
$produk1->jenis = "Laptop";
$produk1->merek = "MSI";

echo $produk1->pesanProduk(); // Laptop dipesan...
?>