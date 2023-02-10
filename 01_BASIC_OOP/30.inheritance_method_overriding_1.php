<?php 
class Produk {
    public function hello(){
        return "Ini dari Produk";
    }
}

class Televisi extends Produk {
    // method overriding, menimpa method parent class dengan cara menulis nama method yang sama di child class.
    public function hello(){
        return "Ini dari Televisi";
    }
    // method hello() kepunyaan class Produk tidak bisa diakses lagi
}

$produk1 = new Televisi();
echo $produk1->hello();
?>