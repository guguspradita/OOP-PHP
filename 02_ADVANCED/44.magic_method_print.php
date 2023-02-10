<?php
/* Magic Method __toString()
Method __toString() akan di jalankan ketika sebuah object "di tuntut" untuk menghasilkan nilai string.
*/

class Produk {
    public function __toString() // mengatasi saat objek langsung dipanggil
    {
        return "Ini berasal dari class Produk" .PHP_EOL;
    }
}

$produk1 = new Produk();
echo $produk1;  // Ini berasal dari class Produk