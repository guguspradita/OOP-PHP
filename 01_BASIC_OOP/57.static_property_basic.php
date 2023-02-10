<?php 
// Static property adalah property milik class, sehingga untuk mengaksesnya kita tidak perlu
// membuat instansiasi object, tapi langsung dipanggil dengan menulis nama classnya.
class Produk {
    public static $merek = "Samsung";
}

echo Produk::$merek; // mengakses property class