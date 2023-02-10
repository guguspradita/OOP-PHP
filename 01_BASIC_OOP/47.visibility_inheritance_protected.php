<?php 

class Produk {
    protected $merek = "Asus";

    protected function Hello(){
        return "Ini dari Produk";
    }
}

class Laptop extends Produk {
    public function sayHelloLaptop(){
        return $this->hello() . " Laptop " . $this->merek; 
    }
}


$produk1 = new Laptop();
echo $produk1->sayHelloLaptop();    // Ini dari Produk Laptop Asus

?>