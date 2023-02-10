<?php 
class Produk {
    public $merek = "Sharp";
    public $stok = 10;

    public function cekStok(){
        return "Sisa stok " . $this->stok;
    }
}

$produk1 = new Produk();
// $produk1->stok = 100;

echo $produk1->merek ; // Sharp
echo "<br>";
echo $produk1->cekStok();   // Sisa stok: 10

?>