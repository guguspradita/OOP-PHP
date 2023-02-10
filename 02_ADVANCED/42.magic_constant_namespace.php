<?php 

namespace GugusPradita;

class Book {
    public function cekClass() 
    {
        $pesan = "Pesan ini berasal dari class: " . __CLASS__;
        $pesan .= " di dalam namespace: " . __NAMESPACE__ ;

        return $pesan;
    }
}

$produk1 = new Book();
echo $produk1->cekClass();
echo PHP_EOL;