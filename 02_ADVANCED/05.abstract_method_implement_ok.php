<?php 

abstract class Produk {
    abstract public function cekHarga();
}

class Televisi extends Produk{
    public function cekHarga()
    {
        return 30000;
    }
}

$produk1 = new Televisi();
echo $produk1->cekHarga();

echo PHP_EOL;