<?php 

abstract class Elektro {
    abstract public function cekBarang($jumlah);
}

class Laptop extends Elektro {
    public function cekBarang(){
        return 3000;
        // Declaration of Laptop::cekBarang() must be compatible with Elektro::cekBarang($jumlah)
    }
}

$produk1 = new Laptop();
