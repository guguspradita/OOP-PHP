<?php 
// static method adalah method yang dimiliki oleh class, bukan object.
class Produk {
    public static $total = 100;
    
// self adalah keyword khusus yang merujuk ke class saat ini.
    public static function cekProduk(){
        return "Total Produk ada ". self::$total;
    }
}

echo Produk::cekProduk(); // Total Produk ada 100
?>