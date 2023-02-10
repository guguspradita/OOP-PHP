<?php 
/*
Dalam bahasan sebelumnya dijelaskan bahwa operasi assignment " = " akan men-copy alamat
memory (reference) dari sebuah object, atau disebut sebagai copy by reference.
*/

class Laptop {
    private $merek;

    public function __construct($merek)
    {
        $this->merek = $merek;
    }

    public function cekMerek(){
        return $this->merek;
    }

    public function setMerek($merek){
        $this->merek = $merek;
    }
}

$produk1 = new Laptop('Asus');
$produk2 = clone $produk1;

echo $produk1->cekMerek().PHP_EOL;  // Asus
echo $produk2->cekMerek().PHP_EOL;  // Asus

$produk2->setMerek('Dell').PHP_EOL;

echo $produk1->cekMerek().PHP_EOL;  // Asus
echo $produk2->cekMerek().PHP_EOL;  // Dell

?>