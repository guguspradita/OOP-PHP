<?php

class Produk {
    public $merek = "Sharp";
    public $stok = 100;

    public function cekStok(){
        return "Sisa stok " . $this->stok;
    }
}

class Televisi extends Produk {
    public $jenis = "Televisi";

    public function cekStokTelevisi(){
        return $this->jenis . " " . $this->merek . ", " . $this->cekStok();
    }
}

$produk1 = new Televisi();
echo $produk1->jenis;   // Televisi
echo "<br>";
echo $produk1->cekStokTelevisi(); // Televisi Sharp, Sisa Stok: 50






?>