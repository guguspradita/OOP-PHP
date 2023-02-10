<?php 
class Produk {
    public $sku = "001";
    public $merek = "Samsung";
    public $harga = 4000000;

    public function pesanProduk() {
        return "Produk dipesan...";
    }
}

$televisi = new Produk(); // Instansiasi object
echo $televisi->sku;    // 001
echo "<br>";
echo $televisi->merek;  // Samsung
echo "<br>";
echo $televisi->harga;   // 4000000
echo "<br>";
echo $televisi->pesanProduk();  // Produk dipesan..

?>