<?php 
class Bendaku {
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

interface SmartElektroniku{
    public function cekOS();    // signature method -> harus di deklarasikan ulang
}

class Televisi extends Bendaku implements SmartElektroniku {
    public function cekOS() {
        return "Android 9.0 (Pie)";
    }
}

function tampilProduku(SmartElektroniku $barang){
    return "Produk ".$barang->merek." ".$barang->tipe.", dengan ".$barang->cekOS()." di jual seharga Rp. ". number_format($barang->harga,2,",",".");
}

$produk1 = new Televisi("Samsung", "LED TV 40 Inch", 4499000);
echo tampilProduku($produk1);

// Produk Samsung LED TV 40 inch, dengan Android 9.0 (Pie) di jual seharga Rp. 4.499.000,00
?>