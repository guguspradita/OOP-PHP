<?php 
/*
method turunan harus memiliki visibility yang sama atau lebih luas. Misalnya
di abstract method menggunakan public, maka di method turunan juga harus di set sebagai
public, tidak bisa protected atau private
*/

abstract class Brg {
    abstract public function cekLap();
}

class Laptop extends Brg {
    protected function cekLap(){
        // Fatal error: Access level to Laptop::cekLap() must be public (as in class Brg)
        return 10000;
    }
}

$produk1 = new Laptop();