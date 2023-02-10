<?php 

// setiap class turunan harus membuat implementasi dari seluruh abstract method.

abstract class Produk {
    abstract public function cekHarga();
}

class Televisi extends Produk{
    public function cekHarga()
    {
        return 30000;
    }
}

class MesinCuci extends Produk {
    public function cekHarga()
    {
        return 100000;
    }
}

$produk1 = new Televisi();
echo $produk1->cekHarga();

echo PHP_EOL;

$produk2 = new MesinCuci();
echo $produk2->cekHarga();

echo PHP_EOL;

// Yang terpenting dari abstract class adalah, 
// setiap class turunan harus membuat implementasi dari seluruh abstract method.