<?php 
class Produk {
    public $sku = "001"; // property
    public $merek = "Samsung"; // property
    public $harga = 4000000; // property

    public function pesanProduk() {
        return "Produk dipesan...";
    }
}

$televisi = new Produk(); // // Instansiasi object

?>