<?php 

class Produk {
    
    // Constructor adalah method khusus yang otomatis dijalankan ketika sebuah object dibuat.
    public function __construct()
    {
        echo "Constructor dijalankan ... <br>";
    }

    // destructor adalah method khusus yang otomatis dijalankan pada saat object di hapus
    public function __destruct()
    {
        echo "Destructor dijalankan ... <br>";
    }
}

$produk1 = new Produk(); 
$produk2 = new Produk();

?>