<?php 
class Brand {
    public $merek;
    public $tipe;
    public $harga;

    public function __construct($merek, $tipe, $harga)
    {
        $this->merek = $merek;
        $this->tipe = $tipe;
        $this->harga = $harga;
    }
}

class Smartphone extends Brand {}
class Televisi extends Brand {}

function tampilkanProduk(Brand $barang){
    return "Produk " . $barang->merek . " " . $barang->tipe . " di jual seharga Rp. " . number_format($barang->harga,2,",","."); 
}

$produk1 = new Televisi("Samsung", "LED TB 40 Inch", 4499000);
$produk2 = new Smartphone("Samsung", "Galaxy 9+", 11999000);

echo tampilkanProduk($produk1);
echo "<br>";
echo tampilkanProduk($produk2);

// Produk Samsung LED TB 40 Inch di jual seharga Rp. 4.499.000,00
// Produk Samsung Galaxy 9+ di jual seharga Rp. 11.999.000,00
?>