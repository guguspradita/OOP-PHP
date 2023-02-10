<?php 
/* magic method __set() akan dijalankan pada saat kita berusaha
menginput sebuah nilai ke dalam property yang tidak ada (atau tidak bisa diakses) dari sebuah class. Ini adalah magic method untuk setter.
*/
class Barang {
    public function __set($name, $value)
    {
        echo "Maaf property '$name' tidak tersedia dan tidak bisa diisi '$value'" . PHP_EOL;
    }
}

$produk1 = new Barang();
$produk1->nama = "MSI";
$produk1->jenis = "Laptop";
?>