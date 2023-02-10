<?php 
class Produk {
    public function hello(){
        return "Ini dari Produk <br>";
    }
}

class Televisi extends Produk {
    // method overriding, menimpa method parent class dengan cara menulis nama method yang sama di child class.
    public function hello(){
        return "Ini dari Televisi <br>";
    }
    // method hello() kepunyaan class Produk tidak bisa diakses lagi

    // untuk mengakses method hello dari class produk
    // parent::hello() 

    public function helloProduk(){
        return parent::hello();
    }
}

$produk1 = new Televisi();
echo $produk1->hello(); // Ini dari Televisi
echo $produk1->helloProduk(); // Ini dari Produk
?>