<?php 
// static method adalah method yang dimiliki oleh class, bukan object.
class Produk {
    public static $total = 100;
    
    public static function cekProduk(){
        return "Total Produk ada ". Produk::$total;
    }
}

echo Produk::cekProduk(); // Total Produk ada 100
?>