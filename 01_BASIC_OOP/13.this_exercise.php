<?php 

class Produk {
    public $jenis;
    public $merek;
    public $stok;

    public function pesanProduk(){
        $this->stok = $this->stok - 1;  // mengurangi object stok
    }

    public function cekStok(){
        return "Sisa Stok : " . $this->stok . "<br>";
    }
}

$produk1 = new Produk();
$produk1->jenis = "Televisi";
$produk1->merek = "Samsung";
$produk1->stok = 54;

echo $produk1->cekStok(); // sisa stok: 54

$produk1->pesanProduk();
$produk1->pesanProduk();
$produk1->pesanProduk();

echo $produk1->cekStok(); // sisa stok: 51
?>