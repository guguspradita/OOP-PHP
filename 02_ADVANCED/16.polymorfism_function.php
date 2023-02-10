<?php 

abstract class Bendaa {
    abstract protected function cekMerek();
}

class Televisi extends Bendaa {
    public function cekMerek()
    {
        return "Sharp";
    }
}

class MesinCuci extends Bendaa {
    public function cekMerek()
    {
        return "Electrolux";
    }
}

class Laptop extends Bendaa {
    public function cekMerek()
    {
        return "Acer";
    }
}

$produk1 = new Televisi();
$produk2 = new MesinCuci();
$produk3 = new Laptop();

function tampilMerek($objectProduk) {
    return $objectProduk->cekMerek() . PHP_EOL;
}

echo tampilMerek($produk1);
echo tampilMerek($produk2);
echo tampilMerek($produk3);