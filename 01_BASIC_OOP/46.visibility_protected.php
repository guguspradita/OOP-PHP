<?php 
/*
Cara kerja protected mirip seperti private, yakni tidak bisa diakses dari luar class. 
Namun bedanya, protected tetap bisa diakses dari class turunan (child class).
*/

class Produk {
    protected $merek;
    
    protected function hello(){
        return "Ini adalah Produk";
    }
}
$produk01 = new Produk();
// Fatal error: Uncaught Error: Cannot access protected property Produk::$merek
// $produk01->merek = "Asus";

// Fatal error: Uncaught Error: Cannot access protected property Produk::$merek
// echo $produk01->merek;

// Fatal error: Uncaught Error: Call to protected method Produk::hello()
// echo $produk01->hello();


?>