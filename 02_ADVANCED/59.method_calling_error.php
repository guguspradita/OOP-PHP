<?php 
/*
Magic method __call() adalah method khusus yang dijalankan PHP ketika kita mengakses method yang tidak tersedia (atau tidak bisa di akses) dari sebuah class.
*/
class Barang {

}

$produk1 = new Barang();
// $produk1->tambah(3,7,8);

// PHP Fatal error:  Uncaught Error: Call to undefined method Barang::tambah()

?>