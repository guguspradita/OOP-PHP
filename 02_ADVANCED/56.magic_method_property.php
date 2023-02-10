<?php 
/* magic method __set() akan dijalankan pada saat kita berusaha
menginput sebuah nilai ke dalam property yang tidak ada (atau tidak bisa diakses) dari sebuah class. Ini adalah magic method untuk setter.
*/
class Barang{
    public $merek;
    public function __set($name, $value)
    {
        $this->$name = strtoupper($value);
    }
}

$produk1 = new Barang();
$produk1->merek = "Logitech";
$produk1->harga = 15000;
$produk1->tipe = "Mouse";

echo $produk1->merek . PHP_EOL; // LOGITECH
echo $produk1->harga . PHP_EOL; // 15000
echo $produk1->tipe . PHP_EOL; // MOUSE

?>