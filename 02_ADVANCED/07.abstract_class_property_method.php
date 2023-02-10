<?php 

abstract class Produk {
    private $stok = 200;

    abstract public function cekHarga();

    public function cekStok(){
        return $this->stok;
    }
}

class Laptop extends Produk {
    public function cekHarga() {
        return 1000000;
    }
}

$produk1 = new Laptop();
echo $produk1->cekHarga();  // 1000000

echo PHP_EOL;
echo $produk1->cekStok();  // 200