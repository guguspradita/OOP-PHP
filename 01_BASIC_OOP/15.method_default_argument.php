<?php 

class Produk {
    public $jenis; // property dalam class
    public $merek; // property
    public $stok; // property

    public function borongProduk($jumlah = 10) {
        // default parameter - 10
        $this->stok = $this->stok - $jumlah;
    }

    public function cekStok(){
        return "sisa stok : $this->stok <br>";
    }
}

$produk1 = new Produk();
$produk1->jenis = "Laptop";
$produk1->merek = "MSI";
$produk1->stok = 100;

$produk1->borongProduk(); // default mengambil 10
echo $produk1->cekStok(); // sisa stok: 90

$produk1->borongProduk(55); // mengabil 55
echo $produk1->cekStok(); // sisa stok: 35


?>