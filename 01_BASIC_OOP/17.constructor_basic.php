<?php 

class Produk {
    // Constructor adalah method khusus yang otomatis dijalankan ketika sebuah object dibuat 
    // (yakni pada saat proses inisialisasi dengan perintah new)
    public function __construct() {
        echo "Constructor dijalankan <br>";
    }
}

$produk1 = new Produk();
$produk2 = new Produk();

?>