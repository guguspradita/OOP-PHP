<?php

class Produk {
    public $sku;
    public $stok = 20;

    public function cekStok(){
        return "Sisa Stok: " . $this->stok;
    }
}

class Televisi extends Produk {
    public $ukuranLayar;
}

class MesinCuci extends Produk {
    public $kapasitas;
}

class Speaker extends Produk {
    public $konfigurasi;
}

$produk1 = new Televisi();
$produk2 = new MesinCuci();
$produk3 = new Speaker();

echo $produk1->sku = "001";
echo "<br>";
echo $produk1->cekStok();
echo "<br>";

echo $produk1->ukuranLayar = "22 Inch";
?>