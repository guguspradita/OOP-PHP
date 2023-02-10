<?php 
class Produk {
    public $jenis = "";
    public $merek = "";

    public function pesanProduk(){
        // return $jenis. "dipesan..."; // error Undefined variabel $jenis
    }
}

$produk1 = new Produk(); // Instansiasi object
$produk1->jenis = "Laptop";
$produk1->merek = "MSI";

echo $produk1->pesanProduk();
?>