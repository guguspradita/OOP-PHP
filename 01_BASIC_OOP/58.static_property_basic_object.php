<?php 
class Produk {
    public static $totalHarga = 10000;
}

$produk1 = new Produk();
echo $produk1->totalHarga; // tidak menampilkan hasil apa2

// Notice: Accessing static property Produk::$totalProduk as non static