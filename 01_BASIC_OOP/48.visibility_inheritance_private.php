<?php 
class Produk {
    private $merek = "Asus";

    private function hello(){
        return "Ini dari Produk";
    }
}

class Laptop extends Produk {
    public function helloLaptop(){
        return $this->hello()." Laptop ". $this->merek;
    }
}

$produk1 = new Laptop();
// echo $produk1->helloLaptop();
// Fatal error: Uncaught Error: Call to private method Produk::hello() from context 'Laptop'
?>