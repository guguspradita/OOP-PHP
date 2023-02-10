<?php 
/*
Magic method __isset() akan dijalankan ketika sebuah property yang tidak ada (atau tidak bisa diakses) di periksa dengan fungsi isset() atau empty().

Fungsi isset() dipakai untuk memeriksa apakah sebuah variabel terdefinisi dan berisi sesuatu. 

Sedangkan fungsi empty() dipakai untuk memeriksa apakah sebuah variabel memiliki nilai yang dianggap kosong seperti 0, "" (string kosong), [ ] (array kosong), atau variabel tersebut diisi nilai NULL.
*/
class barang {
    public $merek = "Sony";
    protected $stok = 9;
    private $tipe = "Televisi";

    public function __isset($name)
    {
        echo "Apakah property '$name' kosong? ";
        var_dump(empty($this->$name));
    }
}

$produk1 = new barang();
var_dump(empty($produk1->merek));
echo PHP_EOL;
empty($produk1->stok);
echo PHP_EOL;
empty($produk1->tipe);
echo PHP_EOL;
empty($produk1->warna);
echo PHP_EOL;

/*
bool(false)
Apakah property 'stok' kosong? bool(false)
Apakah property 'tipe' kosong? bool(false)
Apakah property 'warna' kosong? bool(true)
*/
?>