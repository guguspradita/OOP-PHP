<?php 

/*
Jika sebuah property atau method di set sebagai private, 
yang bisa mengaksesnya hanya kode program di dalam class itu saja. 
Kode program di luar class tidak bisa mengakses property dan method ini (akan menghasilkan error)

*/
class Produk {
    private $merek;

    private function sayHello(){
        return "Ini dari Class Produk <br>";
    }
}

$produk01 = new Produk();

// Fatal error: Uncaught Error: Cannot access private property Produk::$merek
// $produk01->merek = "Asus";

// Fatal error: Uncaught Error: Cannot access private property Produk::$merek
// echo $produk01->merek;

// Fatal error: Uncaught Error: Call to private method Produk::hello()
// echo $produk01->hello();

?>