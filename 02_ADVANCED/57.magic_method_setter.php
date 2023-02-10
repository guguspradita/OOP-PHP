<?php 
/* magic method __set() akan dijalankan pada saat kita berusaha
menginput sebuah nilai ke dalam property yang tidak ada (atau tidak bisa diakses) dari sebuah class. Ini adalah magic method untuk setter.
*/
class Barang {
    private $merek;
    private $harga;

    public function __set($name, $value)
    {
        if ($name == "merek") {
            if(is_string($value)){
                $this->merek = $value;
            }
            else {
                echo "Error: merek harus dalam bentuk string" .PHP_EOL;
            }
        } else if ($name == "harga"){
            if (is_int($value)){
                $this->harga = $value;
            }
            else {
                echo "Error: harga harus berbentuk angka".PHP_EOL;
            }
        } else {
            echo "Maaf property '$name' tidak tersedia".PHP_EOL;
        }
    }
}

// test dengan data benar
$test1 = new Barang();
$test1->merek = "Logitech";
$test1->harga = 15000;

print_r($test1);
/*
Produk Object
(
    [merek:Produk:private] => Logitech
    [harga:Produk:private] => 15000
)
 */

// test dengan data salah
$produk01 = new Barang();
$produk01->merek = 5000;
$produk01->harga = "mahal";
$produk01->tipe = "Mouse";

print_r ($produk01);

/*
Error: merek harus berbentuk string
Error: harga harus berbentuk angka
Maaf property 'tipe' tidak tersedia
Barang Object
(
    [merek:Produk:private] =>
    [harga:Produk:private] =>
)
*/

?>