<?php 
class Produk {
    public const KURSUSD = 1500;
}

$produk1 = new Produk();
echo $produk1->KURSUSD;  // Warning: Undefined property: Produk::$KURSUSD