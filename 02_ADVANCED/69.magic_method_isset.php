<?php 
/*
Magic method __isset() akan dijalankan ketika sebuah property yang tidak ada (atau tidak bisa diakses) di periksa dengan fungsi isset() atau empty().

Fungsi isset() dipakai untuk memeriksa apakah sebuah variabel terdefinisi dan berisi sesuatu. 

Sedangkan fungsi empty() dipakai untuk memeriksa apakah sebuah variabel memiliki nilai yang dianggap kosong seperti 0, "" (string kosong), [ ] (array kosong), atau variabel tersebut diisi nilai NULL.
*/
class Barang {
    public $merek = "Sony";
    protected $stok = 9;
    private $tipe = "Televisi";

    public function __isset($name)
    {
        echo "Apakah property '$name' ada?";
        return isset($this->$name);
    }
}

$produk1 = new Barang();
var_dump(isset($produk1->merek)); // bool(true)
echo PHP_EOL;
var_dump(isset($produk1->stok)); // bool(true)
echo PHP_EOL;
var_dump(isset($produk1->tipe)); // bool(true)
echo PHP_EOL;
var_dump(isset($produk1->warna)); // bool(false)
echo PHP_EOL;

/*
bool(true)
Apakah property 'stok' ada? bool(true)
Apakah property 'tipe' ada? bool(true)
Apakah property 'warna' ada? bool(false)
*/
?>