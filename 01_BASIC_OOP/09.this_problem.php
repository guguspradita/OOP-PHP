<?php 
class Produk {
    public $jenis = "";
    public $merek = "";

    public function pesanProdukTelevisi(){
        return "Televisi dipesan...";
    }
    public function pesanProdukLaptop(){
        return "Laptop dipesan...";
    }
}

$produk1 = new Produk(); // Instansiasi Object
$produk1->jenis="Televisi";
$produk1->merek="Samsung";

$produk2 = new Produk(); // Instansiasi Object
$produk2->jenis="Laptop";
$produk2->merek="MSI";

echo $produk1->pesanProdukTelevisi(); // Televisi dipesan...
echo "<br>";
echo $produk2->pesanProdukLaptop(); // Laptop dipesan...

?>