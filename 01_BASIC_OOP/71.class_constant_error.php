<?php 
class Produk {
    public static $kursSGD = 11000;
    public const KURSUSD = 15000;
}

Produk::$kursSGD = 12000;
echo Produk::$kursSGD; // 12000

echo PHP_EOL;

// Produk::KURSUSD = 16000; // parse error: syntax error, unexpected '=' 
echo Produk::KURSUSD;