<?php 

/* magic method __set() akan dijalankan pada saat kita berusaha
menginput sebuah nilai ke dalam property yang tidak ada (atau tidak bisa diakses) dari sebuah
class. Ini adalah magic method untuk setter.

*/
class Produk {

}

$produk1 = new Produk();
echo $produk1->nama = "MSI" . PHP_EOL;
echo $produk1->jenis = "Laptop" . PHP_EOL;

?>