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

var_dump(is_a($produk1 , "Produk"));    // bool(true)
var_dump(is_a($produk1 , "Televisi"));  // bool(true)
var_dump(is_a($produk2 , "Produk"));    // bool(true)
var_dump(is_a($produk2 , "Televisi"));  // bool(false)
var_dump(is_a($produk3 , "Speaker"));   // bool(true)