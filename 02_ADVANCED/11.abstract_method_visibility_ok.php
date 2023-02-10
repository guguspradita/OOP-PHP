<?php 

abstract class Benda{
    abstract protected function cekBenda();
}

class Rokok extends Benda {
    public function cekBenda(){
        return 5000;
    }
}

$produk1 = new Rokok();
echo $produk1->cekBenda();
echo PHP_EOL;