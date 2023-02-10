<?php 

class Produk {
    public $jenis;
    public $merek;
    public $stok;

    public function pesanProduk(){
        $this->stok = $this->stok - 1;  // mengurangi object stok
    }

    public function borongProduk($jumlah){
        $this->stok = $this->stok - $jumlah;
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

$produk1->borongProduk(10); 
echo $produk1->cekStok(); // sisa stok: 44

$produk1->borongProduk(5); 
echo $produk1->cekStok(); // sisa stok : 39
?>