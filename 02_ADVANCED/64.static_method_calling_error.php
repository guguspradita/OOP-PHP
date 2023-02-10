<?php 
/*
Magic method __callStatic() adalah method khusus yang dijalankan PHP ketika kita mengakses method static yang tidak tersedia (atau tidak bisa di akses) dari sebuah class.
*/

class Barang {
    public function __call($name,$arguments){
        echo "Maaf method $name dengan argument ". implode(", ",$arguments);
        echo " tidak tersedia <br>";
    }
}
Barang::tambah(3, 7, 8);
// PHP Fatal error:  Uncaught Error: Call to undefined method Barang::tambah()
?>