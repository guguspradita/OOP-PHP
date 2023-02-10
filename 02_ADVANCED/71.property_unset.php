<?php 
/*
Magic method __unset() akan dijalankan ketika sebuah property yang tidak ada (atau tidak bisa diakses) di hapus dengan fungsi unset().
*/

class barang {
    public $merek = "Sony";
}

$produk1 = new barang();
print_r($produk1);
echo PHP_EOL;

unset($produk1->merek); // menghapus property $merek
print_r($produk1);
?>