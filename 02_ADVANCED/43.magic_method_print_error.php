<?php
/* Magic Method __toString()
Method __toString() akan di jalankan ketika sebuah object "di tuntut" untuk menghasilkan nilai string.
*/

class Produk {

}

$produk1 = new Produk();
echo $produk1;
// Recoverable fatal error: Object of class Produk could not be converted to string