<?php 

abstract class Objek {
    abstract public function cekHarga();
}

abstract class Tv extends Objek {
    abstract public function cekTipe();
}

class TelevisiLCD extends Tv {
    public function cekHarga()
    {
        return 20000;
    }

    public function cekTipe()
    {
        return "Politron";
    }
}

$produk1 = new TelevisiLCD();
echo $produk1->cekHarga();  // 20000
echo PHP_EOL;
echo $produk1->cekTipe();   // Politron