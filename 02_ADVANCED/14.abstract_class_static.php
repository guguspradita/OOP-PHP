<?php 

abstract class produk {
    public static $totalProduk = 100;

    public static function cekProduk(){
        return "Total produk ada " . self::$totalProduk;
    }
}

echo produk::$totalProduk;
echo PHP_EOL;
echo produk::cekProduk();