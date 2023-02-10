<?php 
/*
Magic method __unset() akan dijalankan ketika sebuah property yang tidak ada (atau tidak bisa diakses) di hapus dengan fungsi unset().
*/

class Barang {
    public $merek = "Sony";
}

$produk1 = new barang();
print_r($produk1);

unset($produk1->stok);
print_r($produk1);

/*

Produk Object
(
[merek] => Sony
)
Produk Object
(
[merek] => Sony
)

*/
?>