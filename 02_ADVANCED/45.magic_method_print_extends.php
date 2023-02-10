<?php
/* Magic Method __toString()
Method __toString() akan di jalankan ketika sebuah object "di tuntut" untuk menghasilkan nilai string.
*/

class Laptop {
    public function __toString() // mengatasi saat objek langsung dipanggil
    {
        return "Ini berasal dari class Laptop" .PHP_EOL;
    }
}

class Acer extends Laptop {

}

$produk1 = new Acer();
echo $produk1;  // Ini berasal dari class Produk